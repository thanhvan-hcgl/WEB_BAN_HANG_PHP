<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.main',['title'=>'Trang Quan Tri Admin']);
    }
    public function test()
    {
        return view('admin.home',['title'=>'Trang Quan Tri Admin']);
    }
}
