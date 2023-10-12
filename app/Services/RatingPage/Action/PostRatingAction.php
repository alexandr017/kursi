<?php

namespace App\Services\RatingPage\Action;

use App\Repositories\Posts\PostRepositoryInterface;
use App\Services\RatingPage\Dto\PageRatingDto;
use App\Services\RatingPage\RatingPageAbstractClass;

class PostRatingAction extends RatingPageAbstractClass
{
    public function __construct(protected PostRepositoryInterface $postRepository)
    {}

    public function rate(PageRatingDto $dto)
    {
        $post = $this->postRepository->getById($dto->entityId);

        $rateAvg = $this->getRatingValue($post->getRatingsValue(), $post->getRatingsCount(), $dto->rate);

        $post->incrementRatingCount();
        $post->setRatingsValue($rateAvg);

        $this->postRepository->save($post);

        return $post;
    }
}