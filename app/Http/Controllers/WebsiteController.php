<?php

namespace App\Http\Controllers;

use App\Models\content;
use App\Models\post;
use App\Models\visitor;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function dashboard()
    {
        $posts = Post::all();
        $contents = Content::all();
        $visitors = visitor::all();

        return view('auth.Posts.dashboard', compact('posts', 'contents', 'visitors'));
    }

    public function Index()
    {
        $contents = content::all();

        return view('Websites.Dashboard', compact('contents'));
    }

    public function ESB()
    {
        return view('Websites.PESB');
    }

    public function BI()
    {
        return view('Websites.PBI');
    }

    public function RE()
    {
        return view('Websites.Resource');
    }

    // -- Documents --

    public function show(Post $post)
    {
        return view('auth.Posts.single', ['post' => $post]);
    }

    public function articles()
    {
        $posts = Post::where('is_publish', Post::Published)
            ->where('tipe_id', 1)
            ->paginate(2);
        // ->get();
        return view('Websites.Articles.index', ['posts' => $posts]);
    }
    public function whitepapers()
    {
        $posts = Post::where('is_publish', Post::Published)
            ->where('tipe_id', 2)
            ->get();
        return view('Websites.Whitepapers.index', ['posts' => $posts]);
    }

    // -- End of Documents --

    public function searchArticles(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $posts = Post::where('is_publish', Post::Published)
            ->where('tipe_id', 1)
            ->where(function ($query) use ($searchQuery) {
                $query->where('title', 'LIKE', "%$searchQuery%")
                    ->orWhere('description', 'LIKE', "%$searchQuery%");
            })
            ->paginate(2);
        $posts->appends(request()->except('page')); // Ubah jumlah item per halaman sesuai kebutuhan

        return view('Websites.Articles.index', compact('posts'));
    }
}
