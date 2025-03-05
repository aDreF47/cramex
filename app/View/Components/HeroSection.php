<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $title;
    public $text;
    public $image;

    public function __construct($title, $text, $image)
    {
        $this->title = $title;
        $this->text = $text;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.hero-section');
    }
}
