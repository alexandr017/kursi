<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\PageRequest;
use App\Repositories\Admin\Pages\PagesRepository;

class PagesController extends Controller
{
    private mixed $pageRepository;

    public function __construct()
    {
        $this->pageRepository = app(PagesRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = $this->pageRepository->getAllPagesForShow();

        $breadcrumbs = [['h1' => 'Страницы']];

        return view('admin.v2.pages.index', compact('pages', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['h1' => 'Страницы', 'link' => route('admin.pages.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.pages.create', compact( 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->pageRepository->createPage($data);

        if ($result) {
            return redirect()
                ->route('admin.pages.index')
                ->with('flash_success', 'Страница создана!');
        } else {
            return redirect()
                ->route('admin.pages.index')
                ->with('flash_errors', 'Ошибка создания!');
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->pageRepository->find($id);

        $breadcrumbs = [
            ['h1' => 'Страницы', 'link' => route('admin.pages.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.pages.edit', compact('item', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageRequest $request, string $id)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->pageRepository->updatePage($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.pages.index')
                ->with('flash_success', 'Страница обнавлена!');
        } else {
            return redirect()
                ->route('admin.pages.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->pageRepository->deletePage($id);

        if ($result) {
            return redirect()
                ->route('admin.pages.index')
                ->with('flash_success', 'Страница удалена!');
        } else {
            return redirect()
                ->route('admin.pages.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
