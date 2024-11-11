<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index($username)
    {
        $title = 'Profile';
        $profile = User::where('username', $username)->first();
        
        if(!$profile){
            abort(404);
        }
        
        return view('profile', [
            'profile' => $profile,
            'title' => $title
        ]);
    }
    
    public function update(Request $request, string $username)
    {
        $user = Auth::User();
        $telephone = $request->telephone ? $request->telephone : null;
        
        if($telephone === '+62'){
            $telephone = null;
        }
        
        $telephone = $request->telephone;
        if($telephone){
            // mengambil nilai string ke 1
            if(substr($telephone, 0, 1) === '0'){
                $telephone = '+62' . substr($telephone, 1);
            }
        }

        $rules = [
            'telephone' => 'nullable|string|min:11|max:15|unique:users,telephone,' . $user->id,
            'alamat' => 'nullable|max:100|string',
            'bio' => 'nullable|max:255|string|min:3'
        ];
        
        if($request->name !== $user->name){
            $rules['name'] = 'required|min:6|max:255';
        }
        
        if($request->telephone !== $user->telephone){
            $rules['telephone'] = 'nullable|string|min:11|max:15|unique:users,telephone,';
        }
        
        if($request->username !== $user->username){ 
            $rules['username'] = 'required|min:6|max:255|unique:users,username,' . $user->id;
        }
        
        // rules user
        $validate = $request->validate($rules);
        
        // validate
        $user->update(array_merge($validate, ['telephone' => $telephone]));
        // $user->update($validate);
        // dd($request->all());
        
        // redirect
        return redirect()->route('profile', ['username' => $user->username])->with('success', 'Profile berhasil di update');
    }

    
    public function updateProfile(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required|image|file|max:15060|mimes:jpg,png,jpeg'
        ]);
        
        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('galery');
            // menghapus image lama
            if(Auth::user()->image){
                Storage::delete(Auth::user()->image);
            }
        }
        
        Auth::user()->update($validate);
        return redirect()->route('profile', ['username' => Auth::User()->username])->with('success', 'Mantapp berhasil');
    }
    
    
    Public function destroyProfile($id)
    {
        $user = Auth::User()->username;
        
        if($user != $id){
            abort(404);
        }
        
        Storage::delete(Auth::user()->image);
        return redirect()->route('profile', ['username' => Auth::User()->username])->with('success', 'Mantapp berhasil');
    }
}