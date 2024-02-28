<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // mengalihkan ke view tampilan login
    public function index() {
        return view('auth.login', ['title' => 'Login | Kamp Sewa']);
    }
}
