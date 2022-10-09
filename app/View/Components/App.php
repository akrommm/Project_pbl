<?php

namespace App\View\Components;

use Illuminate\View\Component;

class App extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $menu;
    public $header;
    public function __construct($title = null, $menu = null, $header = null)
    {
        $this->title = $title;
        $this->menu = $menu;
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app');
    }
}
