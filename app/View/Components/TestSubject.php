<?php

namespace App\View\Components;

class TestSubject extends Base
{
    public function __construct()
    {
        dump($this->attributes); // null
    }

    public function render()
    {
        dump($this->attributes); // still null

        return $this->view('components.test-subject');
    }
}
