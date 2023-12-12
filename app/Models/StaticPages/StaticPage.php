<?php

namespace App\Models\StaticPages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

/**
 * StaticPage
 *
 * @mixin Eloquent
 */
class StaticPage extends Model
{
    use HasFactory;
    use SoftDeletes;

    const MAIN_PAGE = 'Главная';
    const CONTACTS = 'Контакты';
    const CACHE_KEY_BY_BREADCRUMBS = 'cache_key_by_breadcrumbs';
    const CACHE_KEY_BY_ID = 'cache_key_by_id';

    const CACHE_KEYS = [
        self::CACHE_KEY_BY_BREADCRUMBS,
        self::CACHE_KEY_BY_ID,
    ];

    const CACHE_SAVE_INTERVAL = 3600;

    protected $table = 'seo_for_pages';

    protected $fillable = ['title', 'meta_description', 'h1', 'breadcrumbs', 'lead', 'content', 'rating_value', 'rating_count'];

    public function getRatingsCount(): int
    {
        return $this->rating_count;
    }

    public function getRatingsValue(): float
    {
        return $this->rating_value;
    }

    public function incrementRatingCount(): void
    {
        $this->rating_count ++;
    }

    public function setRatingsValue(float $ratingValue): void
    {
        $this->rating_value = $ratingValue;
    }
}
