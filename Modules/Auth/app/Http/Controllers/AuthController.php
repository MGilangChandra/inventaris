<?php

namespace Modules\Auth\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Modules\Pegawai\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a login page.
     */
    public function index()
    {
        return view('auth::admin-login', ['title' => 'Admin']);
    }

    /**
     * Display a login page.
     */
    public function pegawaiIndex()
    {
        return view('auth::pegawai-login', ['title' => 'Pegawai']);
    }

    /**
     * Handle an authentication attempt.
     */
    public function pegawaiLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('pegawai')->attempt($credentials)) {
            $request->session()->regenerate();
            flash()->success('Berhasil Masuk!');
            return redirect()->intended('pegawai/');
        } else {
            flash()->warning('Username / Password Salah!');
            return redirect()->intended('pegawai/login');
        }
    }

    /**
     * Log the user out of the application.
     */
    public function pegawaiLogout(Request $request): RedirectResponse
    {
        if (Auth::guard('pegawai')->check()) {
            Auth::guard('pegawai')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            flash()->success('Berhasil Keluar!');
        }

        return redirect()->intended('pegawai/login');
    }

    public function pegawaiProfile()
    {
        $user = Auth::guard('pegawai')->user();

        if ($user->avatar_url == null) {
            $avatar = '';
        } else {
            $avatarPath = 'avatars/' . $user->avatar_url;
            $user->avatar_url = $avatarPath;

            $avatar = Storage::disk('public')->get($avatarPath);
        }

        return view('auth::profile.pegawai', [
            'title' => 'Profile',
            'akun' => $user,
            'avatar' => $avatar
        ]);
    }

    public function pegawaiDashboard()
    {
        return view('auth::pegawai-dashboard', ['title' => 'Dashboard']);
    }

    public function pegawaiEdit(Request $request, $id)
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

            return redirect()->route('pegawai.dashboard');
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Pegawai gagal diperbarui! ' . $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function adminEdit(Request $request, $id)
    {
        $messages = [
            'username.required' => 'Username harus diisi',
            'username.string' => 'Username harus berupa string',
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'nullable|string|unique:users,username,' . $id,
            'nama' => 'required|string',
            'password' => 'nullable|string',
        ], $messages);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                flash()->warning($error);
            }

            return redirect()->back()->withInput();
        }

        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);

            $user->fill($request->only('username', 'nama'));

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            DB::commit();

            flash()->success('Admin berhasil diperbarui');

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            DB::rollBack();

            flash()->danger('Admin gagal diperbarui! ' . $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            flash()->success('Berhasil Masuk!');
            return redirect()->intended('admin/');
        } else {
            flash()->warning('Username / Password Salah!');
            return redirect()->intended('admin/login');
        }
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            flash()->success('Berhasil Keluar!');
        }

        return redirect()->intended('admin/login');
    }

    public function adminProfile()
    {
        $user = Auth::guard('admin')->user();

        if ($user->avatar_url == null) {
            $avatar = '';
        } else {
            $avatarPath = 'avatars/' . $user->avatar_url;
            $user->avatar_url = $avatarPath;

            $avatar = Storage::disk('public')->get($avatarPath);
        }
        return view('auth::profile.admin', ['title' => 'Profile', 'akun' => $user, 'avatar' => $avatar]);
    }

    public function adminDashboard()
    {
        return view('auth::admin-dashboard', ['title' => 'Dashboard']);
    }

    public function laporan() {
        return view('auth::laporan', ['title' => 'Laporan']);
    }
}
