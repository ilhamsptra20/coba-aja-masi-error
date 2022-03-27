<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::get();
        return view('admin.index', compact('pengaduan'));
    }
}
