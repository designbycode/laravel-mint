<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FormInput extends Component
{
    public function __construct(
        public ?string $name,
    )
    {
    }

    public function classes(): string
    {
        return 'block w-full rounded-md border-mute-300  dark:placeholder:text-mute-300 dark:border-mute-500 text-mute-700 shadow-sm focus:border-mute-600 focus:ring-primary-400 focus:ring-2 ring-offset-3 sm:text-sm dark:bg-mute-700 dark:text-mute-100';
    }


    public function render(): View
    {
        return view('mint::components.form.input');
    }
}
