<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Shortcode;

use App\Shortcodes\Date\Year;
use App\Shortcodes\Accordion\AccordionWrap;
use App\Shortcodes\Accordion\AccordionItem;


class ShortcodesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Shortcode::register('current_year', Year::class); // Текущий год

        Shortcode::register('accordion_wrap', AccordionWrap::class); // Аккордеон
        Shortcode::register('accordion_item', AccordionItem::class);
    }
}
