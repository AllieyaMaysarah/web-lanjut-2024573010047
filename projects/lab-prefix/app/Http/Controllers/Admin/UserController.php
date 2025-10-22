<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Alya', 'Budi', 'Citra', 'Dewi']; 
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        return "User ID: " . $id;
    }
}
