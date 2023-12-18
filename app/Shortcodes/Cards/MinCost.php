<?php

namespace App\Shortcodes\Cards;

use App\Shortcodes\BaseShortcode;

class MinCost extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        global $c;

        if (is_iterable($c)) {
            $minCost = 10000000;
            foreach ($c as $card) {
                if ($card->cost < $minCost) {
                    $minCost = $card->cost;
                }
            }
            return $minCost;
        }

        return 0;
    }
}
