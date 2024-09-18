<?php

namespace Modules\BarangOut\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Barang\Models\Barang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Modules\BarangOut\Models\BarangOut;
use Illuminate\Support\Facades\Validator;

class BarangOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barangout::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::get();
        $barangOut = BarangOut::with('barang')->where('pegawai_id', Auth::user()->id)->latest()->paginate(10);
        
        return view('barangout::tambah', [
            'barangs' => $barangs,
            'barangOut' => $barangOut,
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

            $barangOut = new BarangOut($request->only([
                'barang_id',
                'jumlah'
            ]));

            $barangOut->pegawai_id = Auth::user()->id;

            $barang = $barangOut->barang;
            $barang->decrementJumlah($barangOut->jumlah);

            if ($barang->jumlah <= 0) {
                $barang->status = 'habis';
                $barang->save();
            }

            $barangOut->save();
            DB::commit();

            flash()->success('Barang dikeluarkan');

            return redirect()->route('pegawai.barang.list');
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Barang gagal dikeluarkan: ' . $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('barangout::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('barangout::edit');
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
