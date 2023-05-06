<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if ($user = Auth::user()){
            if($user->role == 'admin'){
                return redirect()->intended('catatan');
            }elseif($user->role == 's_admin'){
                return redirect()->intended('admin');
            }
        }
        session()->flash('alert', 'Sesuaikan Login dengan Role');
        return view('login');
    }

    public function aksilogin(Request $request)
    {
            request()->validate([
                'email'=>'required',
                'password'=>'required'
            ]);

            $cek = $request->only('email', 'password');

            if(Auth::attempt($cek)){
                $user = Auth::user();
                if($user->role == 'admin'){
                    return redirect()->intended('admin');
                }elseif($user->role == 's_admin'){
                    return redirect()->intended('admin');
                }

                return redirect()->intended('/');
            }
            Session::flash('error', 'Coba periksa kembali');
            return redirect('/');
    }

    public function aksilogout()
    {
        Auth::logout();
        return redirect('/');
    }
   
}
