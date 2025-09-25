<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $jumlahAdmin = User::count();

        return view('admin.index', [
            'jumlah_admin' => $jumlahAdmin
        ]);
    }
}
