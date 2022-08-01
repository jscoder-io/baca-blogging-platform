<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderMenu extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header.menu');
    }
}
