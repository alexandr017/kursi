<?php

namespace App\Shortcodes\Accordion;

use App\Shortcodes\BaseShortcode;

class AccordionWrap extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        return view('site.v3.shortcodes.accordion.accordion-wrap', compact('content'));
    }
}
