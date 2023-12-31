<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\content;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = content::all();
        return view('auth.Contents.index', ['contents' => $contents]); //Mengambil list data konten logo perusahaan
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.Contents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            if ($request->has('file') && $request->type == 'business') {
                $file = $request->file;
                $fileName = time() . $file->getClientOriginalName();
                $imagePath = public_path('Assets\Website\media\Dashboard\industries');
                $file->move($imagePath, $fileName);

                $gallery = Gallery::create([
                    'image' => $fileName
                ]);
            } else {
                $file = $request->file;
                $fileName = time() . $file->getClientOriginalName();
                $imagePath = public_path('Assets\Website\media\Dashboard\partners');
                $file->move($imagePath, $fileName);

                $gallery = Gallery::create([
                    'image' => $fileName
                ]);
            } //Membuat filename untuk gambar yang namanya akan di simpan pada database dan file nya akan di simpan pada folder public assets

            content::create([
                'title' => $request->title,
                'gallery_id' => $gallery->id,
                'type' => $request->type,
                'description' => $request->description,
                'link' => $request->link,
            ]); //Mengirim semua untuk menjadi modal

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }

        $request->session()->flash('alert-success', 'Post Created Successfully');
        return to_route('partners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $content = content::find($id);
        return view('auth.Contents.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $content = content::find($id);
        if ($content->gallery) {
            $images = $content->gallery->image;
            if (fileExists(public_path('Assets\Website\media\Dashboard\industries') . '/' . $images) && $content->type == 'business') {
                unlink(public_path('Assets\Website\media\Dashboard\industries') . '/' . $images);
            } elseif (fileExists(public_path('Assets\Website\media\Dashboard\partners') . '/' . $images) && $content->type == 'Partner') {
                unlink(public_path('Assets\Website\media\Dashboard\partners') . '/' . $images);
            } else {
                dd('File Not Found');
            } //Menghapus gambar sesuai dengan direktori aset nya dan tipe konten nya
        }

        try {

            DB::beginTransaction();
            if ($request->has('file') && $content->type == 'business') {
                $file = $request->file;
                $fileName = time() . $file->getClientOriginalName();
                $imagePath = public_path('Assets\Website\media\Dashboard\industries');
                $file->move($imagePath, $fileName);
            } elseif ($request->has('file') && $content->type == 'Partner') {
                $file = $request->file;
                $fileName = time() . $file->getClientOriginalName();
                $imagePath = public_path('Assets\Website\media\Dashboard\partners');
                $file->move($imagePath, $fileName);
            } //Membuat filename untuk gambar yang namanya akan di simpan pada database dan file nya akan di simpan pada folder public assets

            $content->update([
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
                'link' => $request->link,
            ]);

            $content->gallery->update([
                'image' => $fileName
            ]);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }

        $request->session()->flash('alert-update', 'Post Updated Successfully');
        return to_route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $content = content::find($id);
        if ($content->gallery && $content->type == 'business') {
            $images = $content->gallery->image;
            unlink(public_path('Assets\Website\media\Dashboard\industries') . '/' . $images);
            $content->gallery->delete();
        } elseif ($content->gallery && $content->type == 'Partner') {
            $images = $content->gallery->image;
            unlink(public_path('Assets\Website\media\Dashboard\partners') . '/' . $images);
            $content->gallery->delete();
        } //Menghapus gambar aset pada folder public
        $content->delete();
        $request->session()->flash('alert-success', 'Post Removed Successfully');
        return to_route('partners.index');
    }
}
