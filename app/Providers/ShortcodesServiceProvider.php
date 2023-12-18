<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Shortcode;

use App\Shortcodes\Date\Year;
use App\Shortcodes\Accordion\AccordionWrap;
use App\Shortcodes\Accordion\AccordionItem;

use App\Shortcodes\Cards\NumberOfOffers;
use App\Shortcodes\Cards\MinDuration;
use App\Shortcodes\Cards\MaxDuration;
use App\Shortcodes\Cards\MinCost;
use App\Shortcodes\Cards\MaxCost;

use App\Shortcodes\CodeLibFix\CodeLibFix;

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

        Shortcode::register('number_of_offers', NumberOfOffers::class);
        Shortcode::register('min_duration', MinDuration::class);
        Shortcode::register('max_duration', MaxDuration::class);
        Shortcode::register('min_cost', MinCost::class);

        Shortcode::register('max_cost', MaxCost::class);
        Shortcode::register('code_lib_fix', CodeLibFix::class);


    }
}
