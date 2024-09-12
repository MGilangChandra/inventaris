<?php

namespace Modules\Pegawai\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Modules\Pegawai\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawaisQuery = Pegawai::with('barangIn', 'barangOut')->latest();
        $pegawais = $pegawaisQuery->paginate(10);
        
        return view('pegawai::index', [
            'pegawais' => $pegawais
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai::tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'username.required' => 'Username harus diisi',
            'username.string' => 'Username harus berupa string',
            'username.unique' => 'Username sudah ada',
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.string' => 'Alamat harus berupa string',
            'no_hp.required' => 'No. HP harus diisi',
            'no_hp.max' => 'No. HP maksimal 18 karakter',
            'no_hp.unique' => 'No. HP sudah ada',
            'no_hp.regex' => 'No. HP harus berupa angka',
            'no_hp.numeric' => 'No. HP harus berupa angka',
            'no_hp.min' => 'No. HP minimal 11 karakter',
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:pegawais',
            'nama' => 'required|string',
            'password' => 'nullable|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'jabatan' => 'required|in:Pengurus Lab,Tata Usaha,Kepala Sekolah,Wakil Kepala Sekolah,Kepala Jurusan,Guru,Wali Kelas',
            'alamat' => 'required|string|max:255|min:3',
            'no_hp' => 'required|string|max:18|min:11|regex:/^[0-9]*$/',
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

            $pegawai = new Pegawai($request->only('username', 'nama', 'jenis_kelamin', 'jabatan', 'alamat', 'no_hp'));

            if ($request->filled('password')) {
                $pegawai->password = Hash::make($request->password);
            }

            $pegawai->save();

            DB::commit();

            flash()->success('Pegawai ditambahkan');

            return redirect()->route('admin.pegawai.list');
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Pegawai gagal ditambahkan!' . $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('pegawai::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($username)
    {
        $pegawai = Pegawai::where('username', $username)->firstOrFail();

        return view('pegawai::edit', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'username.required' => 'Username harus diisi',
            'username.string' => 'Username harus berupa string',
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.string' => 'Alamat harus berupa string',
            'no_hp.required' => 'No. HP harus diisi',
            'no_hp.max' => 'No. HP maksimal 18 karakter',
            'no_hp.unique' => 'No. HP sudah ada',
            'no_hp.regex' => 'No. HP harus berupa angka',
            'no_hp.min' => 'No. HP minimal 11 karakter',
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'nullable|string|unique:pegawais,username,' . $id,
            'nama' => 'required|string',
            'password' => 'nullable|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'jabatan' => 'required|in:Pengurus Lab,Tata Usaha,Kepala Sekolah,Wakil Kepala Sekolah,Kepala Jurusan,Guru,Wali Kelas',
            'alamat' => 'required|string|max:255|min:3',
            'no_hp' => 'required|string|max:18|min:11|regex:/^[0-9]*$/|unique:pegawais,no_hp,' . $id,
        ], $messages);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                flash()->warning($error);
            }

            return redirect()->back()->withInput();
        }

        try {
            DB::beginTransaction();

            $pegawai = Pegawai::findOrFail($id);

            $pegawai->fill($request->only('username', 'nama', 'jenis_kelamin', 'jabatan', 'alamat', 'no_hp'));

            if ($request->filled('password')) {
                $pegawai->password = Hash::make($request->password);
            }

            $pegawai->save();

            DB::commit();

            flash()->success('Pegawai berhasil diperbarui');

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Pegawai gagal diperbarui! ' . $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            Pegawai::destroy($id);

            DB::commit();

            flash()->success('Pegawai Berhasil Dihapus!');

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Pegawai Gagal Dihapus!');

            return redirect()->back();
        }
    }
}
