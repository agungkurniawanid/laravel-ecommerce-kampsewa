<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailPenggunaController extends Controller
{
    public function index($namalengkap) {
        $name = $namalengkap;
        return view('developers.detail-pengguna', ['title' => 'Detail Pengguna', 'name' => $name]);
    }
}
