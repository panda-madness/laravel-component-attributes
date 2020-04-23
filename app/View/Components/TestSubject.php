<?php

namespace App\View\Components;

use Illuminate\View\Component;

// Our component
class TestSubject extends Component
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
