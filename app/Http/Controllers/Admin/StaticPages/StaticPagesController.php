<?php

namespace App\Http\Controllers\Admin\StaticPages;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\StaticPages\StaticPageRequest;
use App\Repositories\Admin\StaticPages\StaticPagesRepository;

class StaticPagesController extends AdminController
{
    private mixed $pageRepository;

    public function __construct()
    {
        $this->pageRepository = app(StaticPagesRepository::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = $this->pageRepository->getAllPagesForShow();

        $breadcrumbs = [['h1' => 'Статические страницы']];

        return view('admin.v2.static-pages.index', compact('pages', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['h1' => 'Статические страницы', 'link' => route('admin.static-pages.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.static-pages.create', compact( 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaticPageRequest $request)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->pageRepository->createPage($data);

        if ($result) {
            return redirect()
                ->route('admin.static-pages.index')
                ->with('flash_success', 'Статическая страница создана!');
        } else {
            return redirect()
                ->route('admin.static-pages.index')
                ->with('flash_errors', 'Ошибка создания!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->pageRepository->find($id);

        if ($item == null) {
            abort(404);
        }

        $breadcrumbs = [
            ['h1' => 'Статические страницы', 'link' => route('admin.static-pages.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.static-pages.edit', compact('item', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaticPageRequest $request, string $id)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->pageRepository->updatePage($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.static-pages.index')
                ->with('flash_success', 'Страница обнавлена!');
        } else {
            return redirect()
                ->route('admin.static-pages.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }


}
