<?php

namespace Modules\BarangIn\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Barang\Models\Barang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Modules\BarangIn\Models\BarangIn;
use Illuminate\Support\Facades\Validator;

class BarangInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barangin::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::get();
        $barangIn = BarangIn::with('barang')->where('pegawai_id', Auth::user()->id)->latest()->paginate(10);
        
        return view('barangin::tambah', [
            'barangs' => $barangs,
            'barangIn' => $barangIn,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'barang_id.required' => 'Barang harus dipilih',
            'jumlah.required' => 'Jumlah harus diisi',
        ];

        $validator = Validator::make($request->all(), [
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer',
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            foreach ($errors as $error) {
                flash()->warning($error);
            }

            return redirect()->back()->withInput();
        }

        try {
            DB::beginTransaction();

            $barangIn = new BarangIn($request->only([
                'barang_id',
                'jumlah'
            ]));

            $barangIn->pegawai_id = Auth::user()->id;

            $barang = $barangIn->barang;
            $barang->incrementJumlah($barangIn->jumlah);

            if ($barang->jumlah >= 1) {
                $barang->status = 'tersedia';
                $barang->save();
            }
            $barangIn->save();
            DB::commit();

            flash()->success('Barang masuk ditambahkan');

            return redirect()->route('pegawai.barang.list');
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Barang gagal dimasukkan: ' . $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('barangin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('barangin::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
