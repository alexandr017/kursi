<?php

namespace App\Services\RatingPage\Action;

use App\Models\StaticPages\StaticPage;
use App\Repositories\StaticPage\StaticPageRepositoryInterface;
use App\Services\RatingPage\Dto\PageRatingDto;
use App\Services\RatingPage\RatingPageAbstractClass;
use InvalidArgumentException;

class SeoPageRatingAction extends RatingPageAbstractClass
{
    public function __construct(protected StaticPageRepositoryInterface $staticPageRepository)
    {}

    public function rate(PageRatingDto $dto): StaticPage
    {
        $page = $this->staticPageRepository->getById($dto->entityId);

        $rateAvg = $this->getRatingValue($page->getRatingsValue(), $page->getRatingsCount(), $dto->rate);

        $page->incrementRatingCount();
        $page->setRatingsValue($rateAvg);

        $this->staticPageRepository->save($page);

        return $page;
    }
}