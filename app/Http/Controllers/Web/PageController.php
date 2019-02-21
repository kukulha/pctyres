<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use App\Tire;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(2);
        return view('home', compact('posts'));
    }

    public function admin()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate();
        return view('web.dashboard', compact('posts'));
    }

    public function blog()
    {
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
    	return view('web.posts', compact('posts'));
    }

    public function post($slug)
    {
    	$post = Post::where('slug', $slug)->first();
        $related= Post::where('category_id', $post->category->id)
            ->where('id', '!=', $post->id)
            ->paginate(3);
   		return view('web.post', compact('post', 'related'));
    }

    public function category($slug)
    {
    	$category = Category::where('slug', $slug)->pluck('id')->first();
    	$posts = Post::where('category_id', $category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
    	return view('web.posts', compact('posts'));
    }

    public function tag($slug)
    {

    	$posts = Post::whereHas('tags', function($query) use($slug)
    	{
    		$query->where('slug', $slug);
    	})->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
    	return view('web.posts', compact('posts'));
    }

    public function camion()
    {
        $tires = Tire::orderBy('name', 'DESC')->where('category', 'CAMION')->paginate(20);
        return view('web.camion', compact('tires'));
    }

    public function agricola()
    {
        $tires = Tire::orderBy('name', 'DESC')->where('category', 'AGRICOLA')->paginate(20);
        return view('web.agricola', compact('tires'));
    }
}
