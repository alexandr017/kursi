<?php

namespace App\Http\Controllers\Site\V3\CompanyReviews;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyReview\CompanyReviewRequest;
use App\Http\Requests\CompanyReview\CreateCompanyReviewRequest;
use App\Services\CompanyReview\Action\CreateCompanyReviewAction;
use App\Services\CompanyReview\Action\IndexCompanyReviewsAction;
use App\Services\CompanyReview\Dto\CreateCompanyReviewDto;
use App\Services\CompanyReview\Dto\IndexCompanyReviewsDto;
use Carbon\CarbonInterface;

class CompanyReviewController extends Controller
{
    public function index(
        CompanyReviewRequest $request,
        IndexCompanyReviewsAction $indexCompanyReviewsAction
    ) {
        $dto  = IndexCompanyReviewsDto::fromRequest($request);
        $reviews = $indexCompanyReviewsAction->run($dto);
        return view('site.v3.modules.company-reviews.company-reviews', compact('reviews'));
    }

    public function create(
        CreateCompanyReviewRequest $request,
        CreateCompanyReviewAction $companyReviewAction
    ) {
        $dto  = CreateCompanyReviewDto::fromRequest($request);
        $companyReviewAction->run($dto);
        return $this->response();
    }
}