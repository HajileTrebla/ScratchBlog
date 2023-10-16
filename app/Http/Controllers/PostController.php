<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
        ]);

        $newPost = Post::create($data);

        return redirect(route('posts.index'))->with('success', 'created new post '.$newPost->title.' on '.$newPost->created_at);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $post->body = htmlspecialchars_decode($post->body);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->user()->id){
            return redirect(route('posts.index'))->with('error', 'Unauthorized Page');
        }

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->user()->id){
            return redirect(route('posts.index'))->with('error', 'Unauthorized Page');
        }

        $post->update($data);

        return redirect(route('posts.index'))->with('success', 'Updated post #'.$post->id.":".$post->title.' on '.$post->updated_at);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id !== auth()->user()->id){
            return redirect(route('posts.index'))->with('error', 'Unauthorized Page');
        }

        $title = $post->title;
        $post->delete();

        return redirect(route('posts.index'))->with('success', 'Deleted post #'.$id.":".$title);
    }
}
