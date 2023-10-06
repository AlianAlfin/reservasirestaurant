<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;

class CategoryBlogController extends Controller
{
    public function index()
    {
        $category_blogs = CategoryBlog::paginate(2);
        return view('category_blogs.index', compact('category_blogs'));
    }

    public function show(CategoryBlog $categoryBlog)
    {
        $categoryBlog = CategoryBlog::all();
        return view('category_blogs.show', compact('categoryBlog'));
    }
}
