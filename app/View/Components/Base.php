<?php

namespace App\View\Components;


use Illuminate\View\Component;

abstract class Base extends Component
{
    public function view(string $path)
    {
        $contents = file_get_contents(view($path)->getPath());

        $contents = preg_replace(
            '/<(.+)>/',
            '<${1} data-id="123">',
            $contents,
            1
        );

        return $contents;
    }
}
