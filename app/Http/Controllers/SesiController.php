<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');

    }
    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
        ]);

        $infologin = [
        'email'=>$request->email,
        'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
           if(Auth::user()->role == 'operator'){
            return redirect('admin/operator');
           } elseif(Auth::user()->role == 'dokter'){
            return redirect('admin/dokter');
           } elseif(Auth::user()->role == 'perawat'){
            return redirect('admin/perawat');
           }
        } else {
            return redirect('')->withErrors('username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
