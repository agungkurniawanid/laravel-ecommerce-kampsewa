<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    //todo mengalihkan ke view tampilan login
    public function index()
    {
        return view('auth.login', ['title' => 'Login | Kamp Sewa']);
    }

    //todo fungsi untuk login
    public function login(Request $request)
    {
        // ! validasi sesuai dengan name input dan tidak boleh kosong
        $credentials = $request->validate([
            'number_phone' => ['required'],
            'password' => ['required'],
        ]);

        // ! Cek apakah pengguna masuk menggunakan nomor telepon atau nama lengkap
        $user = User::where('number_phone', $credentials['number_phone'])
            ->orWhere('fullname', $credentials['number_phone'])
            ->first();

        if ($user) {
            if (
                Auth::attempt(['number_phone' => $user->number_phone, 'password' => $credentials['password']]) ||
                Auth::attempt(['fullname' => $user->fullname, 'password' => $credentials['password']])
            ) {
                $request->session()->regenerate();

                // ! Mengambil pengguna yang berhasil login
                $user = Auth::user();

                // ! Menyimpan data nama lengkap dan level dalam sesi
                $request->session()->put('fullname', $user->fullname);
                $request->session()->put('level', $user->level);

                // ! cek user login sesuai dengan level dan dialihkan ke dashboard bersangkutan
                if ($user->level == 'Developer') {
                    Alert::toast('Login success', 'success');
                    return redirect('developer/dashboard/home')->with('success', 'Login success');
                } elseif ($user->level == 'Customer') {
                    Alert::toast('Login success', 'success');
                    return redirect('customer/dashboard/home')->with('success', 'Login success');
                }
            } else {
                Alert::toast('Password salah', 'error');
            }
        } else {
            Alert::toast('Pengguna tidak ditemukan', 'error');
        }
        return back()->withErrors([
            'number_phone' => 'The provided credentials do not match our records.',
        ])->onlyInput('number_phone');
    }



    // todo fungsi untuk logout dari dashboard developer
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::toast('Logout success', 'success');
        return redirect()->route('login');
    }
}
