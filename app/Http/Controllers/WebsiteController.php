<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\content;
use App\Models\laravisit;
use App\Models\post;
use App\Models\visitor_month;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Coderflex\Laravisit\Laravisit;

class WebsiteController extends Controller
{
    public function dashboard()
    {
        $posts = Post::all();
        $post = Post::find(1);
        $viewsData = $this->getViewsData(1);
        $articles = Post::where('tipe_id', 1)->get();
        $contents = Content::all();
        $datas = laravisit::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy('month')
            ->whereYear('created_at', '=', 2023)
            ->get();
        // $visitors = visitor::all();
        $visitors = Post::withTotalVisitCount()->first()->visit_count_total;
        $top = Post::select('title')->popularAllTime()->take(4)->pluck('title');
        // $top = laravisit::where('visitable_id', $visitors)->get();
        $categories = category::all();
        // Siapkan data untuk Chart.js
        $labels = [];
        $data = [];
        foreach ($datas as $item) {
            $labels[] = $item->month;
            $data[] = $item->count;
        }

        return view('auth.Posts.dashboard', compact('posts', 'post', 'contents', 'visitors', 'categories', 'articles', 'viewsData', 'datas', 'labels', 'data', 'top')); //Untuk menampilkan 3 data pada dashboard lalu menghitungnya
    }

    private function getViewsData()
    {
        $visitorMonths = visitor_month::where('post_id', 1)
            ->selectRaw('YEAR(date) as year, MONTH(date) as month, COUNT(*) as total_views')
            ->groupBy('year', 'month')
            ->get();

        $viewsData = [];
        foreach ($visitorMonths as $visitorMonth) {
            $viewsData[$visitorMonth->year . '-' . $visitorMonth->month] = $visitorMonth->total_views;
        }

        return $viewsData;
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
        $posts = Post::where('is_publish', Post::Published) // Akan menampilkan artikel yang pada publish = 1 dan jika draft maka tidak akan di tampilkan
            ->where('tipe_id', 1)
            ->paginate(3);
        $whiteps = Post::where('is_publish', Post::Published)
            ->where('tipe_id', 2)
            ->paginate(3);
        return view('Websites.Resource', compact('posts', 'whiteps'));
    }

    // -- Documents -- //Berfungsi untuk menampilkan artikel lalu menampilkan secara satu-persatu

    public function show(Post $post)
    {
        if ($post) {
            $categoryId = $post->category_id;

            $category = Category::find($categoryId);

            if ($category) {
                $categoryName = $category->name;
            } else {
                // Handle ketika Category tidak ditemukan
            }
        } else {
            // Handle ketika Post tidak ditemukan
        }
        $post->visit()->hourlyIntervals()->withIP()->withData(['category' => $categoryName]);
        return view('auth.Posts.single', ['post' => $post]);
    }

    public function articles()
    {
        $posts = Post::where('is_publish', Post::Published) // Akan menampilkan artikel yang pada publish = 1 dan jika draft maka tidak akan di tampilkan
            ->where('tipe_id', 1)
            ->paginate(2);
        // ->get();
        return view('Websites.Articles.index', ['posts' => $posts]);
    }
    public function whitepapers()
    {
        $posts = Post::where('is_publish', Post::Published)
            ->where('tipe_id', 2)
            ->paginate(2);
        return view('Websites.Whitepapers.index', ['posts' => $posts]);
    }

    // -- End of Documents --

    public function searchArticles(Request $request) //Untuk mencari artikel yang mirip dengan input an pada search bar
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

    public function searchWhitepapers(Request $request) //Untuk mencari artikel yang mirip dengan input an pada search bar
    {
        $searchQuery = $request->input('searchQuery');

        $posts = Post::where('is_publish', Post::Published)
            ->where('tipe_id', 2)
            ->where(function ($query) use ($searchQuery) {
                $query->where('title', 'LIKE', "%$searchQuery%")
                    ->orWhere('description', 'LIKE', "%$searchQuery%");
            })
            ->paginate(2);
        $posts->appends(request()->except('page')); // Ubah jumlah item per halaman sesuai kebutuhan

        return view('Websites.Whitepapers.index', compact('posts'));
    }
}
