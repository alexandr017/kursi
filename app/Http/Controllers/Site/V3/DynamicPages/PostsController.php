<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Posts\PostCategory;
use App\Models\Posts\Post;

// Dynamic type 3
class PostsController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $post = Post::where(['id' => $sectionID, 'status' => 1])
            ->whereNull(['deleted_at'])
            ->with(['comments' => function($query) {
                $query->whereNull(['parent_id'])->with('childes');
            }])->first();

        if ($post == null) {
            abort(4040);
        }

        // если категория выключена то пост не покадывать
        $category = PostCategory::where(['id' => $post->category_id, 'status' => 1])
            ->whereNull('deleted_at')
            ->first();

        if ($category == null) {
            abort(404);
        }

        // todo comments

        return view('site.v3.templates.blog.post', compact('post'));
    }
}
