<?php

namespace Modules\KategoriBarang\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Modules\KategoriBarang\Models\KategoriBarang;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorisQuery = KategoriBarang::with('barang')->latest();
        $kategoris = $kategorisQuery->paginate(10);
        return view('kategoribarang::index', [
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategoribarang::tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
        ], [
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            foreach ($errors as $error) {
                flash()->warning($error);
            }

            return redirect()->back()->withInput();
        }

        try {
            DB::beginTransaction();

            $kategori = new KategoriBarang($request->only([
                'nama',
            ]));

            $kategori->save();

            DB::commit();

            flash()->success('Kategori Berhasil Ditambah!');

            return redirect()->route('admin.kategori.list');
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Kategori Gagal Ditambah!');
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('kategoribarang::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('kategoribarang::edit');
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
