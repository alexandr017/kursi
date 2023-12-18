<?php

namespace App\Shortcodes\Cards;

use App\Shortcodes\BaseShortcode;

class MinDuration extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        global $c;

        if (is_iterable($c)) {
            $minDuration = 10000000;
            foreach ($c as $card) {
                if ($minDuration != null && $card->duration < $minDuration) {
                    $minDuration = $card->duration;
                }
            }

            return $minDuration;
        }

        return 0;
    }
}
