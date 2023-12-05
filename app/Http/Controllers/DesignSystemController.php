<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DesignSystemController extends Controller
{
    public function index() : View
    {
        return view('design-system.v4.index');
    }

    public function component(string $component, Request $request) : View
    {
        $componentType = clearData($component) ?? '';
        $componentName = clearData($request['name']) ?? '';

        $componentFullName = "design-system.v4.components.$componentType.$componentName.index";
        if ($component == 'templates') {
            $componentFullName = "design-system.v4.$componentType.$componentName.index";
        }

        return view('design-system.v4.component', compact('componentType', 'componentName', 'componentFullName'));
    }

    public function templates(Request $request) : View
    {
        $templateName = clearData($request['name']) ?? '';

        if(str_contains($templateName, './')) { // скорее всего злоумышленник
            abort(404);
        }

        $view = "design-system.v4.templates.$templateName.index";

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view, compact('templateName'));
    }
}
