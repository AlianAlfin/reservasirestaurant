<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_blogs = CategoryBlog::all();
        return view('admin.blogs.create', compact('category_blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        $image = $request->file('image')->store('public/blogs');

        $blog = Blog::create([
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'tag' => $request->tag,
            'second' => $request->second,
            'last' => $request->last,
        ]);
        if ($request->has('category_blogs')) {
            $blog->category_blogs()->attach($request->category_blogs);
        }

        return to_route('Admin.blogs.index')->with('success', 'Success create data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {

        // $blog = Blog::all();
        $category_blogs = CategoryBlog::all();
        return view('admin.blogs.edit', compact('blog', 'category_blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'second' => 'required',
            'last' => 'required',
            'tag' => 'required'
        ]);

        $image = $blog->image;
        if ($request->hasFile('image')) {
            Storage::delete($blog->image);
            $image = $request->file('image')->store('public/blogs');
        }

        $blog->update([
            'title' => $request->title,
            'second' => $request->second,
            'last' => $request->last,
            'description' => $request->description,
            'tag' => $request->tag,
            'image' => $image,
        ]);
        if ($request->has('category_blogs')) {
            $blog->category_blogs()->sync($request->category_blogs);
        }

        return to_route('Admin.blogs.index')->with('success', 'Success update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::delete($blog->image);
        $blog->delete();

        return to_route('Admin.blogs.index')->with('danger', 'Success delete data');
    }
}