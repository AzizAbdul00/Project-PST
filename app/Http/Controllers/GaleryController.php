<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Galery';
        $galeries = Galery::with('author')->latest()->get();
        $galeries = $galeries->map(function($galery){
            $fullname = explode(' ', $galery->author->name);
            $initials = ' ';
            
            if(isset($fullname[0])){
                $initials .= strtoupper($fullname[0][0]);
            }
            if(isset($fullname[1])){
                $initials .= strtolower($fullname[1][0]);
            }
            $galery->initials = $initials;
            return $galery;
        });
        return view('galery', [
            'title' => $title,
            'galeries' => $galeries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $title = 'Add Galery';
    //     return view('galery.createGalery', [
    //         'title' => $title
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validate = $request->validate([
    //         'title' => 'required|max:137',
    //         'image' => 'required|image|file|max:2030',
    //     ]);
        
    //     if($request->file('image')){
    //         $validate['image'] = $request->file('image')->store('galery');
    //     }
        
    //     $validate['author_id'] = Auth::User()->id;
    //     Galery::create($validate);
    //     return redirect()->route('galery')->with('success', 'Galery berhasil di tambahkan');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
        //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $galery = Galery::find($id);
    //     if(Auth::User()->id !== $galery->author_id){
    //         abort(403);
    //     }
    //     return view('galery.updateGalery', [
    //         'title' => 'Update Galery',
    //         'galery' => $galery
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Galery $galery)
    // {
    //     $rules = [
    //         'title' => 'required|max:137',
    //         'image' => 'image|file|max:2030',
    //     ];
    //     $validate = $request->validate($rules);
    //     if($request->file('image')){
    //         if($request->oldImage){
    //             Storage::delete($request->oldImage);
    //         }
    //         $validate['image'] = $request->file('image')->store('galery');
    //     }
        
    //     Galery::where('id', $galery->id)->update($validate);
    //     return redirect()->route('galery')->with('success', 'Galery berhasil di update');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Galery::find($id);
        
        if(!$galery){
            abort(403);
        }
        if(Auth::User()->id !== $galery->author_id){
            abort(403);
        }
        
        Storage::delete($galery->image);
        $galery->delete();
        return redirect()->route('galery')->with('success', 'Galery success deleted');
    }
}