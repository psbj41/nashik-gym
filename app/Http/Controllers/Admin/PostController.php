<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.pages.admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.pages.admin.post.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->post_content,
            'status' => $request->status,
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
        ]);

        if ($request->hasFile('feature_img')) {
            $post->addMedia($request->feature_img)->toMediaCollection("feature_img");
        }
        return redirect()->route('post.index')->with('success', "Post Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        $category = Category::all();
        return view('backend.pages.admin.post.edit',compact(['post','category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PostRequest  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);
        $post->update([
            'title' => $request->input('title', $post->title),
            'excerpt' => $request->input('excerpt', $post->excerpt),
            'content' => $request->input('post_content', $post->content),
            'status' => $request->input('status', $post->status),
            'category_id' => $request->input('category_id', $post->category_id),
        ]);

        return redirect()->route('post.index')->with('success', "Post Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->media()->delete();
        $post->delete();
        return redirect()->route('post.index')->with('success', "Post Deleted Successfully");

    }
}
