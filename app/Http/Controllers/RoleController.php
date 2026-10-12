<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function loginKasir()
    {
        if (session('role') === 'kasir') {
            return redirect()->route('dashboard.kasir');
        }

        return view('login-kasir');
    }

    public function loginDapur()
    {
        if (session('role') === 'dapur') {
            return redirect()->route('dashboard.dapur');
        }

        return view('login-dapur');
    }

    public function prosesLogin(Request $request, string $role)
    {
        abort_unless(in_array($role, ['kasir', 'dapur'], true), 404);

        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('username', $request->username)
            ->where('role', $role)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()
                ->withErrors(['login' => 'Username atau password salah.'])
                ->onlyInput('username');
        }

        $request->session()->regenerate();

        $request->session()->put([
            'role' => $user->role,
            'username' => $user->username,
            'user_id' => $user->id,
        ]);

        return $role === 'kasir'
            ? redirect()->route('dashboard.kasir')
            : redirect()->route('dashboard.dapur');
    }

    public function pelanggan()
    {
        return view('pelanggan');
    }

    public function prosesPelanggan(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'nomor_hp' => ['required', 'string', 'max:20'],
        ]);

        $request->session()->put('pelanggan', $data);

        return redirect()->route('menu.pelanggan');
    }

    public function menuPelanggan()
    {
        if (!session()->has('pelanggan')) {
            return redirect()->route('pelanggan');
        }

        return view('menu-pelanggan', [
            'pelanggan' => session('pelanggan'),
        ]);
    }

    public function dashboardKasir()
    {
        if (session('role') !== 'kasir') {
            return redirect()->route('login.kasir');
        }

        return view('dashboard-kasir');
    }

    public function dashboardDapur()
    {
        if (session('role') !== 'dapur') {
            return redirect()->route('login.dapur');
        }

        return view('dashboard-dapur');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('pilih.role');
    }

    public function logoutPelanggan(Request $request)
    {
        $request->session()->forget('pelanggan');

        return redirect()->route('pilih.role');
    }
}
