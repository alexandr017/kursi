<?php

namespace App\Shortcodes\CodeLibFix;

use App\Shortcodes\BaseShortcode;

class CodeLibFix extends BaseShortcode
{
    public function register($shortcode, $content, $compiler, $name, $viewData = false)
    {
        global $isRequiredCodeLibFix;

        if ($isRequiredCodeLibFix == null) {
            $isRequiredCodeLibFix = true;
            return '<script src="/local/templates/kursi/js/prizm/prism.js"></script>';
        }

        return '';
    }
}
