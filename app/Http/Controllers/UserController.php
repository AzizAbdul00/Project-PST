<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        $title = 'User Pengguna';
        $users = User::latest();
        
        if(request('search')){
            $users->where('name',  'like', '%' . request('search') . '%');
        }
        
        $users = $users->simplePaginate(9);
        $collection = $users->getCollection();
        
        // $users = $users->map(function($user))
        $collection->transform(function($user) {
            $nameParts = explode(' ', $user->name);
            $initials = '';
        
            if (isset($nameParts[0])) {
                $initials .= strtoupper($nameParts[0][0]);
            }
        
            if (isset($nameParts[1])) {
                $initials .= strtolower($nameParts[1][0]);
            }
        
            $user->initials = $initials;
            return $user;
        });
        
        return view('user', [
            'title' => $title,
            'users' => $users
        ]);
    }

    // public function create(){
        // $title = 'Add user pengguna';
        // return view('user.createUser', ['title' => $title]);
    // }

    // public function createProses(Request $request){
        // $request->validate([
        //     'name' => 'required|min:6',
        //     'username' => 'required|min:6|unique:users',
        //     'email' => 'required|unique:users|email:dns',
        //     'password' => 'required|min:6'
        // ]);
        

        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['email'] = $request->email;
        // $user['password'] = Hash::make($request->password);
        // User::create($user);

        // return redirect()->route('user')->with('success', 'User baru berhasil ditambahkan');
        
    // }
    
    // public function update($id){
        // $title = 'Update User';
        // $user = User::find($id);
    
        // // Cek apakah user ditemukan
        // if (!$user) {
        //     // Jika tidak ditemukan, arahkan kembali dengan pesan error
        //     return redirect()->route('user')->withErrors(['error' => 'User tidak ditemukan']);
        // }
    
        // return view('user.updateUser', [
        //     'title' => $title,
        //     'user' => $user
        // ]);
    // }

    // public function updateProses(Request $request, User $user){
        // $rules = [
        //     'name' => 'required|min:6',
        //     'password' => 'required|min:6'
        // ];
        
        // if ($request->email != $user->email) {
        //     $rules['email'] = ['required', 'email:dns', Rule::unique('users')->ignore($user->id)];
        // }
    
        // // Cek apakah username diubah, jika ya, tambahkan validasi unique
        // if ($request->username != $user->username) {
        //     $rules['username'] = ['required', 'min:6', Rule::unique('users')->ignore($user->id)];
        // }
        
        // $validated = $request->validate($rules);
        // User::where('id', $user->id)->update($validated);
        // return redirect()->route('user')->with('success', 'User berhasil di perbarui');
    // }

    // public function destroy($id){
        // $user = User::find($id);
        // if($user) {
        //     $user->posts()->delete();
        //     $user->galery()->delete();
        //     $user->delete();
        //     return redirect()->route('user')->with('success', 'User success deleted');
        // }else{
        //     return redirect()->route('user')->with('failed', 'User success deleted');
        // }
    // }
}