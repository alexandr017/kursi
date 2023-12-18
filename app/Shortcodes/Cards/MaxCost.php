<?php

namespace App\Shortcodes\Cards;

use App\Shortcodes\BaseShortcode;

class MaxCost extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        global $c;

        if (is_iterable($c)) {
            $maxCost = 0;
            foreach ($c as $card) {
                if ($card->cost > $maxCost) {
                    $maxCost = $card->cost;
                }
            }
            return $maxCost;
        }

        return 0;
    }
}
