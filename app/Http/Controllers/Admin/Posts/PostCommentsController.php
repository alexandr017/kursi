<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\Posts\PostCommentRequest;
use App\Repositories\Admin\Posts\PostsRepository;
use App\Repositories\Admin\Posts\PostCommentsRepository;

class PostCommentsController extends AdminController
{
    private mixed $postsRepository;
    private mixed $postCommentsRepository;

    public function __construct()
    {
        $this->postsRepository = app(PostsRepository::class);
        $this->postCommentsRepository = app(PostCommentsRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = $this->postCommentsRepository->getAllCommentsForShow();

        $breadcrumbs = [['h1' => 'Комментарии']];

        return view('admin.v2.posts.comments.index', compact('comments', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = $this->postsRepository->getPostsForSelect();

        $breadcrumbs = [
            ['h1' => 'Комментарии', 'link' => route('admin.posts.index')],
            ['h1' => 'Создание']
        ];

        return view('admin.v2.posts.comments.create', compact( 'posts', 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCommentRequest $request)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postCommentsRepository->createComment($data);

        if ($result) {
            return redirect()
                ->route('admin.post-comments.index')
                ->with('flash_success', 'Комментарий создан!');
        } else {
            return redirect()
                ->route('admin.post-comments.index')
                ->with('flash_errors', 'Ошибка создания!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = $this->postCommentsRepository->find($id);

        if ($item == null) {
            abort(404);
        }

        $posts = $this->postsRepository->getPostsForSelect();

        $breadcrumbs = [
            ['h1' => 'Комментарии', 'link' => route('admin.post-comments.index')],
            ['h1' => 'Редактирование'],
        ];

        return view('admin.v2.posts.comments.edit', compact('item', 'breadcrumbs', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCommentRequest $request, string $id)
    {
        $data = $request->all();
        $data = emptyDataToNull($data);
        $result = $this->postCommentsRepository->updateComment($id, $data);

        if ($result) {
            return redirect()
                ->route('admin.post-comments.index')
                ->with('flash_success', 'Комментарий обнавлен!');
        } else {
            return redirect()
                ->route('admin.post-comments.index')
                ->with('flash_errors', 'Ошибка обновления!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->postCommentsRepository->deleteComment($id);

        if ($result) {
            return redirect()
                ->route('admin.post-comments.index')
                ->with('flash_success', 'Комментарий удален!');
        } else {
            return redirect()
                ->route('admin.post-comments.index')
                ->with('flash_errors', 'Ошибка удаления!');
        }
    }
}
