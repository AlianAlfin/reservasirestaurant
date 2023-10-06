<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryBlogStoreRequest;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryBlogController extends Controller
{
    public function index()
    {
        $category_blogs = CategoryBlog::all();
        return view('admin.category_blogs.index', compact('category_blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category_blogs.create');
    }


    public function store(CategoryBlogStoreRequest $request)
    {
        $image = $request->file('image')->store('public/category_blogs');

        CategoryBlog::create([
            'title' => $request->title,
            'tag' => $request->tag,
            'desc' => $request->desc,
            'preview' => $request->preview,
            'image' => $image,
        ]);

        return to_route('Admin.category_blogs.index')->with('success', 'Success create data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $category_blogs = CategoryBlog::findOrFail($id);

        //render view with post
        return view('admin.category_blogs.show', compact('category_blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryBlog $categoryBlog)
    {
        return view('admin.category_blogs.edit', compact('categoryBlog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryBlog $categoryBlog)
    {
        $request->validate([
            'title' => 'required',
            'preview' => 'required',
            'tag' => 'required',
            'desc' => 'required',
        ]);

        $image = $categoryBlog->image;
        if ($request->hasFile('image')) {
            Storage::delete($categoryBlog->image);
            $image = $request->file('image')->store('public/category_blogs');
        }

        $categoryBlog->update([
            'title' => $request->title,
            'preview' => $request->preview,
            'image' => $image,
            'tag' => $request->tag,
            'desc' => $request->desc,
        ]);
        return to_route('Admin.category_blogs.index')->with('success', 'Success update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryBlog $categoryBlog)
    {
        Storage::delete($categoryBlog->image);

        $categoryBlog->menus()->detach();
        $categoryBlog->delete();

        return to_route('Admin.category_blogs.index')->with('danger', 'Success delete data');
    }
}
