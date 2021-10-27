<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin.Users.login',['title'=>'Dang Nhap He Thong']);
    }
    public function store(Request $request)
    {
        //print request
        //dd($request->input);
        //kiểm tra user có nhập đúng thông tin
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        //kiem tra user co trong he thong
        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], $request->input('remember'))) {

            return redirect()->route('admin');
        }
        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
    }
    
