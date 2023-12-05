<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Cache;

class JsScriptsController extends Controller
{
    public function index(Request $request) : void
    {
        $result = '';

        if(str_contains($request['m'], './')) { // скорее всего злоумышленник
            abort(404);
        }

        $modules = explode(',', str_replace(['[', ']'],'', clearData($request['m'])));
        //$shortCodes = explode(',', str_replace(['[', ']'],'', clearData($request['s'])));

        foreach ($modules as $module) {
            $pathToModule = resource_path('/views/design-system/v4/')  . $module . '/main.js';
            if (Cache::has($pathToModule)) {
                $result .= Cache::get($pathToModule);
                //$result .= ' console.log("from cache"); ';
            } elseif(file_exists($pathToModule)) {
                $code = file_get_contents($pathToModule);
                //$result .= ' console.log("from file"); ';
                $result .= $code;
                Cache::put($pathToModule, $code, Carbon::now()->addMinutes(1));
            }
        }

        // todo: добавить скрипты шорткодов

        header('Content-type: text/javascript');
        echo $result;
    }
}
