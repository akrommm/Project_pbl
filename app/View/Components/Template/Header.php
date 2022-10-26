<?php

namespace App\View\Components\Template;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;
    public $title;
    public $header;
    public function __construct($menu = null, $title = null, $header = null)
    {
        $this->menu = $menu;
        $this->title = $title;
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template.header');
    }
}
