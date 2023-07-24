<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Dynamic type 6
class ListingController extends Controller implements DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1)
    {
        dd($sectionID);
        // TODO: Implement render() method.
    }
}
