<?php

namespace App\Shortcodes\Cards;

use App\Shortcodes\BaseShortcode;

class MaxDuration extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        global $c;

        if (is_iterable($c)) {
            $maxDuration = 0;
            foreach ($c as $card) {
                if ($card->duration > $maxDuration) {
                    $maxDuration = $card->duration;
                }
            }
            return $maxDuration;
        }

        return 0;
    }
}
