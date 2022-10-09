<?php

namespace App\View\Components\Template;

use Illuminate\View\Component;

class ModuleBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $color;
    public $title;
    public $subtitle;
    public $url;
    public function __construct($color, $title, $subtitle, $url)
    {
        $this->color = $color;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template.module-box');
    }
}
