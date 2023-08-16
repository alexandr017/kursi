<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Posts\PostRequest;
use App\Repositories\Admin\Posts\PostsRepository;
use App\Repositories\Admin\Posts\PostCategoriesRepository;
use App\Repositories\Admin\Employees\EmployeesRepository;

class PostsController extends AdminController
{
    private mixed $postRepository;
    private mixed $postCategoriesRepository;
    private mixed $employeesRepository;

    public function __construct()
    {
        $this->postRepository = app(PostsRepository::class);
        $this->postCategoriesRepository = app(PostCategoriesRepository::class);
        $this->employeesRepository = app(EmployeesRepository::class);
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
        $categories = $this->postCategoriesRepository->getCategoriesForSelect();
        $employees = $this->employeesRepository->getEmployeesForSelect();

        $breadcrumbs = [
            ['h1' => 'Записей', 'link' => route('admin.posts.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.posts.posts.create', compact('categories', 'employees', 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postRepository->createPost($data);

        if ($result) {
            return redirect()
                ->route('admin.posts.index')
                ->with('flash_success', 'Запись создана!');
        } else {
            return redirect()
                ->route('admin.posts.index')
                ->with('flash_errors', 'Ошибка создания!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->postRepository->find($id);

        if ($item == null) {
            abort(404);
        }

        $categories = $this->postCategoriesRepository->getCategoriesForSelect();
        $employees = $this->employeesRepository->getEmployeesForSelect();

        $breadcrumbs = [
            ['h1' => 'Записи', 'link' => route('admin.posts.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.posts.posts.edit', compact('item', 'breadcrumbs', 'categories', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postRepository->updatePost($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.posts.index')
                ->with('flash_success', 'Запись обнавлена!');
        } else {
            return redirect()
                ->route('admin.posts.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->postRepository->deletePost($id);

        if ($result) {
            return redirect()
                ->route('admin.posts.index')
                ->with('flash_success', 'Запись удалена!');
        } else {
            return redirect()
                ->route('admin.posts.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
