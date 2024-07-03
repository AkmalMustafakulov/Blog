<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return BlogResource::collection($blogs);
    }
    public function store(Request $request) {
        $blog = Blog::create($request->all());
        return new BlogResource($blog);
    }
    public function show(Blog $blog) {
        return new BlogResource($blog);
    }
    public function update() {

    }
}
