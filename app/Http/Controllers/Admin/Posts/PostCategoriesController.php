<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Posts\PostCategoryRequest;
use App\Repositories\Admin\Posts\PostCategoriesRepository;

class PostCategoriesController extends AdminController
{
    private mixed $postCategoryRepository;

    public function __construct()
    {
        $this->postCategoryRepository = app(PostCategoriesRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->postCategoryRepository->getAllCategoriesForShow();

        $breadcrumbs = [['h1' => 'Категории записей']];

        return view('admin.v2.posts.categories.index', compact('categories', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['h1' => 'Категории записей', 'link' => route('admin.post-categories.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.posts.categories.create', compact( 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCategoryRequest $request)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postCategoryRepository->createCategory($data);

        if ($result) {
            return redirect()
                ->route('admin.post-categories.index')
                ->with('flash_success', 'Категория создана!');
        } else {
            return redirect()
                ->route('admin.post-categories.index')
                ->with('flash_errors', 'Ошибка создания!');
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->postCategoryRepository->find($id);

        $breadcrumbs = [
            ['h1' => 'Категории записей', 'link' => route('admin.post-categories.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.posts.categories.edit', compact('item', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCategoryRequest $request, string $id)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postCategoryRepository->updateCategory($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.post-categories.index')
                ->with('flash_success', 'Категория обнавлена!');
        } else {
            return redirect()
                ->route('admin.post-categories.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->postCategoryRepository->deleteCategory($id);

        if ($result) {
            return redirect()
                ->route('admin.post-categories.index')
                ->with('flash_success', 'Категория удалена!');
        } else {
            return redirect()
                ->route('admin.post-categories.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
