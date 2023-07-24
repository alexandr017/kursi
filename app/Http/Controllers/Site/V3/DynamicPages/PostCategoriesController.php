<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Posts\PostCategory;

// Dynamic type 2
class PostCategoriesController extends Controller implements DynamicPagesInterface
{
    private const POST_CATEGORY_SECTION_TYPE_ID = 2;
    private const POST_SECTION_TYPE_ID = 3;

    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $category = PostCategory::where(['id' => $sectionID, 'status' => 1])
            ->whereNull('deleted_at')
            ->first();

        if ($category == null) {
            abort(404);
        }


        $posts = \DB::table('posts')
            ->leftJoin('urls', 'posts.id', 'urls.section_id',)
            ->select('posts.*', 'urls.url') // todo тут скорее всего вместо posts.* можно несколько полей взять
            ->where(['posts.status' => 1, 'urls.section_type' => PostCategoriesController::POST_SECTION_TYPE_ID])
            ->whereNull('posts.deleted_at')
            ->get();

            // todo paginate

        return view('site.v3.templates.blog.category', compact('posts'));

    }
}
