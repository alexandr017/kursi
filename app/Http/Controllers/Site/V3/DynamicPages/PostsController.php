<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Posts\PostCategory;
use App\Models\Posts\Post;
use App\Models\Users\UserRole;
use App\Services\Breadcrumbs\BreadcrumbsRender;

// Dynamic type 3
class PostsController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $post = Post::where(['id' => $sectionID, 'status' => 1])
            ->whereNull(['deleted_at'])
            ->with(['comments' => function($query) {
                $query->whereNull(['parent_id'])->with('childes');
            }, 'author'])->first();

        if ($post == null) {
            abort(404);
        }

        // если категория выключена то пост не покадывать
        $category = PostCategory::where(['id' => $post->category_id, 'status' => 1])
            ->whereNull('deleted_at')
            ->first();

        if ($category == null) {
            abort(404);
        }

        $breadcrumbs = BreadcrumbsRender::get($post->breadcrumbs, $post->h1);

        // todo comments
        $editLink = null;
        $user = \Request::user();

        if ($user && $user->role->role != UserRole::ROLE_USER) {
            $editLink = "/admin/posts/{$post->id}/edit";
        }

        return view('site.v3.templates.blog.post', compact('post', 'breadcrumbs', 'editLink'));
    }
}
