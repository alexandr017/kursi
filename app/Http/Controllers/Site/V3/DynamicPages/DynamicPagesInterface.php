<?php

namespace App\Http\Controllers\Site\V3\DynamicPages;

interface DynamicPagesInterface
{
    public function render($sectionID, $isAmp = false, $paginatePage = 1);
}
