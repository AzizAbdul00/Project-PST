<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardArticle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Dashboard Article';
        $post = Post::where('author_id', Auth::user()->id)->get();
        return view('dashboard.article.article', [
            'title' => $title,
            'posts' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Article';
        return view('dashboard.article.article-create-dashboard', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:6',
            'body' => 'required|min:15',
        ]);
        $validateData['author_id'] = Auth::User()->id;
        
        Post::create($validateData);
        return redirect()->route('dashboard-article')->with('success', 'Article success created');
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
        $title = 'Update Article';
        $post = Post::find($id);
        
        if(!$post){
            return redirect()->route('dashboard-article');
        }
        
        if(Auth::user()->id !== $post->author_id){
            abort(403);
        }

        return view('dashboard.article.article-edit-dashboard', [
            'post' => $post, 
            'title' => $title,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'title' => 'required|min:6',
            'body' => 'required|min:15',
        ]);
        
        $post = Post::findOrFail($id);
        if(Auth::user()->id !== $post->author_id){
            abort(403);
        }
        
        $validateData['author_id'] = Auth::User()->id;
        $post->update($validateData);
        return redirect()->route('dashboard-article')->with('success', 'Article success updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        
        if(!$post){
            return redirect()->route('dashboard-article');
        }
        
        if(Auth::user()->id !== $post->author_id){
            abort(403);
        }
        
        $post->delete();
        return redirect()->route('dashboard-article')->with('success', 'Article success deleted');
    }
}