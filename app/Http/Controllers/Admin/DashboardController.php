<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Post;
use App\Tire;
use App\Message;

class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$categories = Category::orderBy('id', 'DESC')->paginate(6);
    	$tags = Tag::orderBy('id', 'DESC')->paginate(6);
    	$posts = Post::orderBy('id', 'DESC')->paginate(6);
    	$tires = Tire::orderBy('id', 'DESC')->paginate(6);
    	$messages = Message::orderBy('id', 'DESC')->paginate(6);
    	return view('admin.dashboard' , compact('categories', 'tags', 'posts', 'tires', 'messages'));
    }
}
