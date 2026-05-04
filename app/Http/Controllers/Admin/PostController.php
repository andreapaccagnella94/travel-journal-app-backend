<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();

        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'mood' => 'required|string',
            'location_name' => 'nullable|string|max:255',

            'tags' => 'array',
            'tags.*' => 'exists:tags,id',

        ]);

        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('posts.index')
            ->with('success', 'Post creato!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $this->authorizePost($post);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorizePost($post);

        $tags = Tag::all();

        return view('posts.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorizePost($post);

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'mood' => 'required|string',
            'location_name' => 'nullable|string|max:255',

            'tags' => 'array',
            'tags.*' => 'exists:tags,id',

        ]);

        $post->update($validated);

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        } else {
            // se non ricevo tags
            $post->tags()->detach();
        }

        return redirect()->route('posts.show', $post)
            ->with('success', 'Post aggiornato!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorizePost($post);

        // verifico se ha dei tags il post che voglio eliminare
        if ($post->has("tags")) {
            $post->tags()->detach();
        }

        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post eliminato!');
    }

    private function authorizePost(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }
    }
}
