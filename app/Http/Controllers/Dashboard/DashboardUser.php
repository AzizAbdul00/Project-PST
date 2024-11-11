<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Dashboard User';
        $user = User::latest()->get();
        
        return view('dashboard.user.user', [
            'title' => $title,  
            'users' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add user pengguna';
        return view('dashboard.user.user-create-dashboard', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'username' => 'required|min:6|unique:users',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6'
        ]);
        

        $user['name'] = $request->name;
        $user['username'] = $request->username;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);
        User::create($user);

        return redirect()->route('dashboard-user')->with('success', 'User baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Update User';
        $user = User::find($id);
        
        // Cek apakah user ditemukan
        if (!$user) {
            // Jika tidak ditemukan, arahkan kembali dengan pesan error
            return redirect()->route('dashboard-user')->withErrors(['error' => 'User tidak ditemukan']);
        }
        
        if($user->id == Auth::user()->id){
            abort(404);
        }
        
        return view('dashboard.user.user-edit-dashboard', [
            'title' => $title,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|min:6',
            'password' => 'required|min:6'
        ];
        
        if ($request->email != $user->email) {
            $rules['email'] = ['required', 'email:dns', Rule::unique('users')->ignore($user->id)];
        }
    
        // Cek apakah username diubah, jika ya, tambahkan validasi unique
        if ($request->username != $user->username) {
            $rules['username'] = ['required', 'min:6', Rule::unique('users')->ignore($user->id)];
        }
        
        $validated = $request->validate($rules);
        User::where('id', $user->id)->update($validated);
        return redirect()->route('dashboard-user')->with('success', 'User berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        
        if($user) {
            if($user->id == Auth::user()->id){
                abort(403);   
            }
            $user->posts()->delete();
            $user->galery()->delete();
            $user->delete();
            return redirect()->route('dashboard-user')->with('success', 'User success deleted');
        }else{
            return redirect()->route('dashboard-user')->with('failed', 'User not found');
        }
    }
}