<?php

namespace App\Services\RatingPage\Action;

use App\Factories\PageRating\PageRatingFactory;
use App\Services\RatingPage\Dto\PageRatingDataDto;
use App\Services\RatingPage\Dto\PageRatingDto;

class PageRatingAction
{
    public function __construct(protected PageRatingFactory $pageRatingFactory)
    {}

    public function run(PageRatingDto $dto): PageRatingDataDto
    {
        $action = $this->pageRatingFactory->run($dto->entityType);
        $entity = $action->rate($dto);

        return new PageRatingDataDto(
            entityType: $dto->entityType,
            entityId: $dto->entityId,
            ratingValue: $entity->getRatingsValue(),
            ratingCount: $entity->getRatingsCount(),
        );
    }
}