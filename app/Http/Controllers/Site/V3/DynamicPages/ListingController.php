<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use App\Models\Listing\Listing;
use App\Models\Tags\Tag;
use App\Services\Breadcrumbs\BreadcrumbsRender;
use App\Services\Listing\Actions\GetListingAction;
use Illuminate\Http\Request;

// Dynamic type 6
class ListingController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        $getListingAction = resolve(GetListingAction::class);

        $listing = $getListingAction->run($sectionID);

        $breadcrumbs = BreadcrumbsRender::get($listing->breadcrumbs, $listing->h1);

        $editLink = "/admin/listings/{$listing->id}/edit";

        return view('site.v3.templates.listing.listing', compact('listing', 'breadcrumbs', 'editLink'));
    }
}
