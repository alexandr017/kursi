<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Posts\PostRequest;
use App\Repositories\Admin\Posts\PostsRepository;

class PostsController extends AdminController
{
    private mixed $postRepository;

    public function __construct()
    {
        $this->postRepository = app(PostsRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->postRepository->getAllPostsForShow();

        $breadcrumbs = [['h1' => 'Записей']];

        return view('admin.v2.posts.posts.index', compact('posts', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
