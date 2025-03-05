<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionCard extends Component
{
    public $title;
    public $icon;
    public $text;
    public $image;
    public $reverse;

    public function __construct($title, $icon, $text, $image, $reverse = false)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->text = $text;
        $this->image = $image;
        $this->reverse = $reverse;
    }

    public function render()
    {
        return view('components.section-card');
    }
}

