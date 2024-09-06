<?php

namespace Modules\Barang\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Modules\Barang\Models\Barang;
use Modules\KategoriBarang\Models\KategoriBarang;
use Str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangsQuery = Barang::with('kategori')->latest();
        $barangs = $barangsQuery->paginate(10);

        $kategoris = KategoriBarang::get();

        return view('barang::pages.barang.index', [
            'barangs' => $barangs,
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = KategoriBarang::get();
        return view('barang::pages.barang.admin.tambah', [
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nama.required' => 'Nama Barang harus diisi',
            'nama.string' => 'Nama Barang harus berupa string',
            'kategori_id.required' => 'Kategori harus dipilih',
            'kategori_id.exists' => 'Kategori tidak ditemukan',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'gambar*.image' => 'Gambar harus berupa gambar',
            'gambar*.mimes' => 'Gambar harus berupa jpeg, png, jpg, gif, atau svg',
            'gambar*.max' => 'Gambar maksimal 2 MB',
            'jumlah.required' => 'Jumlah harus diisi',
            'jumlah.integer' => 'Jumlah harus berupa angka',
            'jumlah.min' => 'Jumlah minimal 1',
            'jumlah.max' => 'Jumlah maksimal 1000',
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'kategori_id' => 'required|exists:kategori_barangs,id',
            'jumlah' => 'required|integer',
            'deskripsi' => 'required|string',
            'gambar.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            foreach ($errors as $error) {
                return redirect()->back()->withInput()->with('error', $error);
            }

            return redirect()->back()->withInput();
        }

        try {
            DB::beginTransaction();

            $barang = new Barang($request->only([
                'nama',
                'kategori_id',
                'jumlah',
                'deskripsi',
            ]));

            if ($request->jumlah > 0) {
                $barang->status = 'tersedia';
            } else {
                $barang->status = 'habis';
            }

            // Menangani gambar
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                // $imagePaths = [];

                // foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('gambar/barang', $imageName, 'public');
                //     $imagePaths[] = $imagePath;
                // }

                $barang->gambar = $imagePath;

                // $barang->gambar = json_encode($imagePaths); // Simpan jalur gambar sebagai JSON
            }

            $barang->save();

            DB::commit();

            return redirect()->route('admin.barang.list')->with('success', 'Barang baru ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('barang::pages.barang.lihat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('barang::pages.barang.admin.edit');
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
