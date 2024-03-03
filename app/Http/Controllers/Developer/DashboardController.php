<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // mengalihkan ke halaman dashboard utama / home
    public function index() {
        return view('developers.dashboard', ['title' => 'Dashboard | Developer Kamp Sewa']);
    }
}
