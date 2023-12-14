<?php

namespace App\Shortcodes\Accordion;

use App\Shortcodes\BaseShortcode;

class AccordionItem extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        $title = $shortcode->title;
        return view('site.v3.shortcodes.accordion.accordion-inner', compact('content','title'));
    }
}
