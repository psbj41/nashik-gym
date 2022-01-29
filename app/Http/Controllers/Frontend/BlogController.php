<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function allPost()
    {
        $posts = Post::where('status', 'publish')->latest()->paginate(2);
        return view('frontend.pages.blogs',compact('posts'));
    }

    public function singlePost(Post $post)
    {
        return view('frontend.pages.single-post',compact('post'));
    }

    public function categoryWisePosts(Category $category)
    {
        return view('frontend.pages.category-wise',compact('category'));
    }
}
