<?php

namespace App\View\Components;

class TestSubject extends Base
{
    public function __construct()
    {
        dump('dumping in constructor');
        dump($this->attributes); // null
    }

    public function render()
    {
        dump('dumping in render');
        dump($this->attributes); // still null

        return view('components.test-subject');
    }
}
