<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Post\CreateRequest;
use App\Models\category;
use App\Models\post;
use App\Models\tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['category', 'tipe'])
            ->get();

        return view('auth.Posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        $tipes = tipe::all();
        return view('auth.Posts.create', ['categories' => $categories], ['tipes' => $tipes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        try {
            DB::beginTransaction();

            Post::create([
                'title' => $request->title,
                'category_id' => $request->category,
                'tipe_id' => $request->tipe,
                'is_publish' => $request->is_publish,
                'description' => $request->description,
                'content' => $request->content,
                'edited' => Auth::user()->name,
            ]);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }

        $request->session()->flash('alert-success', 'Post Created Successfully');
        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = category::all();
        $tipes = tipe::all();
        return view('auth.Posts.edit', compact('post', 'categories', 'tipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateRequest $request, Post $post)
    {

        try {

            DB::beginTransaction();

            $post->update([
                'title' => $request->title,
                'category_id' => $request->category,
                'tipe_id' => $request->tipe,
                'is_publish' => $request->is_publish,
                'description' => $request->description,
                'content' => $request->content,
                'edited' => Auth::user()->name,
            ]);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }

        $request->session()->flash('alert-update', 'Post Updated Successfully');
        return to_route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $post = post::find($id);
        $post->delete();
        $request->session()->flash('alert-success', 'Post Removed Successfully');
        return to_route('posts.index');
    }
}
