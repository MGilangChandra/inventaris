<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
}
