<?php

namespace App\Http\Controllers\Site\V3\RatingPages;

use App\Http\Requests\RatingPage\RatingPageRequest;
use App\Services\RatingPage\Action\PageRatingAction;
use App\Services\RatingPage\Dto\PageRatingDto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

class RatingPagesController extends Controller
{
    public function rate(
        RatingPageRequest $request,
        PageRatingAction $action
    ) {
        $dto = PageRatingDto::fromRequest($request);
        $data = $action->run($dto);


        return view('site.v3.modules.5-rating.rating',
            [
                'entityId' => $data->entityId,
                'entityType' => $data->entityType,
                'ratingCount' => $data->ratingCount,
                'ratingValue' => $data->ratingValue
            ]
        );
    }
}
