<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Posts\PostCategoryRequest;
use App\Models\Posts\PostCategory;
use App\Repositories\Admin\Posts\PostCategoriesRepository;
use App\Repositories\Cache\CacheRepositoryInterface;
use App\Services\Breadcrumbs\BreadcrumbsConverter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Throwable;

class PostCategoriesController extends AdminController
{
    private mixed $postCategoryRepository;

    public function __construct(
        public CacheRepositoryInterface $cacheRepository
    )
    {
        $this->postCategoryRepository = new PostCategoriesRepository;
    }

    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index() : View
    {
        $categories = $this->postCategoryRepository->getAllCategoriesForShow();

        $breadcrumbs = [['h1' => 'Категории записей']];

        return view('admin.v2.posts.categories.index', compact('categories', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create() : View
    {
        $breadcrumbs = [
            ['h1' => 'Категории записей', 'link' => route('admin.post-categories.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.posts.categories.create', compact( 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     * @param PostCategoryRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(PostCategoryRequest $request) : RedirectResponse
    {
        $errors = $request->getErrors();
        if (count($errors) > 0) {
            return back()->withInput()->with('flash_warning', json_encode($errors));
        }

        $data = $request->all();
        $data = emptyDataToNull($data);
        $data['breadcrumbs'] = BreadcrumbsConverter::put($data['url'], $data['h1']);
        $result = $this->postCategoryRepository->createCategory($data);

        if ($result) {
            $this->cacheRepository->remove(PostCategory::CACHE_KEY_ALL_WHICH_HAVE_POSTS);

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
     * @param string $id
     * @return View
     */
    public function edit(string $id) : View
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
     * @param PostCategoryRequest $request
     * @param string $id
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(PostCategoryRequest $request, string $id) : RedirectResponse
    {
        $errors = $request->getErrors();
        if (count($errors) > 0) {
            return back()->withInput()->with('flash_warning', json_encode($errors));
        }

        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postCategoryRepository->updateCategory($id, $data);

        if ($result) {
            $this->cacheRepository->remove(PostCategory::CACHE_KEY_ALL_WHICH_HAVE_POSTS);
            $this->cacheRepository->remove(PostCategory::CACHE_KEY_BY_ID . $id);

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
     * @param string $id
     * @return RedirectResponse
     * @throws Throwable
     */
    public function destroy(string $id) : RedirectResponse
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
