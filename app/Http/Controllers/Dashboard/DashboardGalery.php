<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Galery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardGalery extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Galery::where('author_id', Auth::User()->id)->get();
        $jumlahGalery = $galery->count();
        $title = 'Dashboard Galery';
        return view('dashboard.galery.galery', [
            'title' => $title,
            'galeries' => $galery,
            'galery' => $jumlahGalery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Galery';
        return view('dashboard.galery.galery-create-dashboard', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|max:137',
            'image' => 'required|image|file|max:8060',
        ]);
        
        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('galery');
        }
        
        $validate['author_id'] = Auth::User()->id;
        Galery::create($validate);
        return redirect()->route('dashboard-galery')->with('success', 'Galery berhasil di tambahkan');
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
        $galery = Galery::find($id);
        
        if(!$galery){
            return redirect()->route('dashboard-galery');
        }
        if(Auth::User()->id !== $galery->author_id){
            abort(403);
        }
        return view('dashboard.galery.galery-edit-dashboard', [
            'title' => 'Update Galery',
            'galery' => $galery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        $rules = [
            'title' => 'required|max:137',
            'image' => 'image|file|max:8060',
        ];
        $validate = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('galery');
        }
        
        Galery::where('id', $galery->id)->update($validate);
        return redirect()->route('dashboard-galery')->with('success', 'Galery berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Galery::find($id);
        
        if(!$galery){
            return redirect()->route('dashboard-galery');
        }
        
        if(Auth::User()->id !== $galery->author_id){
            abort(403);
        }
        
        Storage::delete($galery->image);
        $galery->delete();
        return redirect()->route('dashboard-galery')->with('success', 'Galery success deleted');
    }
}