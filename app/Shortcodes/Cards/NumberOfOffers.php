<?php

namespace App\Shortcodes\Cards;

use App\Shortcodes\BaseShortcode;

class NumberOfOffers extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        global $c;

        if (is_iterable($c)) {
            return count($c);
        }

        return 0;
    }
}
