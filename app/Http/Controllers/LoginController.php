<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    
    public function loginProses(Request $request){
        // dd($request->all());
        
        // cek dlu form input nya
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }else{
            return redirect()->route('login')->with('failed', 'Email atau password salah!');
        };
    }
    
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout berhasil silahkan login kembali');
    }
    


    
    public function register(){
        return view('auth.register');
    }

    public function registerProses(Request $request){
        $request->validate([
            'name' => 'required|min:6',
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);
        
        $data['name'] = $request->name;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        User::create($data);
        
        return redirect()->route('login')->with('success', 'Register berhasil silahkan login');
    }
}