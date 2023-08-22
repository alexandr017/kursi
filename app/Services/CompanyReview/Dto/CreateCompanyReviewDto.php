<?php

namespace App\Services\CompanyReview\Dto;

use App\Http\Requests\CompanyReview\CreateCompanyReviewRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateCompanyReviewDto extends DataTransferObject
{
    public float $rate;
    public ?int $userId;
    public int $companyId;
    public string $name;
    public ?string $pluses;
    public ?string $minuses;
    public ?string $content;

    public static function fromRequest(CreateCompanyReviewRequest $request): self
    {
        return new self(
            userId: $request->getUserId(),
            rate: $request->getRate(),
            companyId: $request->getCompanyId(),
            name: $request->getName(),
            pluses: $request->getPluses(),
            minuses: $request->getMinuses(),
            content: $request->getContentText()
        );
    }

}