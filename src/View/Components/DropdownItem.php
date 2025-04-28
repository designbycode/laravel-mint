<?php

namespace Designbycode\LaravelMint\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownItem extends Component
{

    public function classes(): string
    {
        return 'block w-full px-4 py-2 text-start text-sm leading-5 text-mute-700 cursor-pointer dark:text-mute-300 hover:bg-mute-100 dark:hover:bg-mute-800 focus:outline-none focus:bg-mute-100 dark:focus:bg-mute-800 transition duration-150 ease-in-out';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('mint::components.dropdown.item');
    }
}
