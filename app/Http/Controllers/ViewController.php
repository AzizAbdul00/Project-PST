<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    
    public function index(){
        return view('welcome', [
            'title' => 'Welcome'
        ]);
    }

    public function home() {
        return view('home', [
            'title' => 'Home Page'
        ]);
    }
}