<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Article';
        $posts = Post::with('author')->latest();
        
        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        // $posts = $posts->get();
        $posts = $posts->simplePaginate(9);
        
        
        // $posts = $posts->map(function($post){
        $posts->getCollection()->transform(function($post){
            $fullname = explode(' ' ,$post->author->name);
            $initials = '';

            if(isset($fullname[0])){
                $initials .= strtoupper($fullname[0][0]);
            }

            if(isset($fullname[1])){
                $initials .= strtolower($fullname[1][0]);
            }
            $post->initials = $initials;
            return $post;
        });
        
        return view('article', [
            'posts' => $posts,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $title = 'Create Article';
    //     return view('article.createArticle', ['title' => $title]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validateData = $request->validate([
    //         'title' => 'required|min:6',
    //         'body' => 'required|min:15',
    //     ]);

    //     $validateData['author_id'] = Auth::User()->id;
        
    //     Post::create($validateData);
    //     return redirect()->route('article')->with('success', 'Article success created');
        
    // }

    /**
     * Display the specified resource.
     */
    public function show($title)
    {
        // 
        $titleLink = 'Single Article';
        $article = Post::where('title', $title)->first();

        if(!$article){
            return redirect()->route('article');
        }

        return view('single-article', [
            'title' => $titleLink,
            'post' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $title = 'Update Article';
    //     $post = Post::find($id);

    //     if(Auth::user()->id !== $post->author_id){
    //         abort(403, 'NGAPAIN???');
    //     }

    //     return view('article.updateArticle', [
    //         'post' => $post,
    //         'title' => $title,
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $validateData = $request->validate([
    //         'title' => 'required|min:6',
    //         'body' => 'required|min:15',
    //     ]);
        
    //     $post = Post::findOrFail($id);
    //     if(Auth::user()->id !== $post->author_id){
    //         abort(403);
    //     }
        
    //     $validateData['author_id'] = Auth::User()->id;
    //     $post->update($validateData);
    //     return redirect()->route('article')->with('success', 'Article success updated!');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        
        if(!$post){
            abort(403);
        }
        
        if(Auth::user()->id !== $post->author_id){
            abort(403);
        }
        $post->delete();
        return redirect()->route('article')->with('success', 'Article success deleted');
    }
}