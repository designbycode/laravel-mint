<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;

class FormTextarea extends Component
{
    public function __construct(
        public ?bool   $autoGrow,
        public ?string $name,
    )
    {
    }

    public function classes(): string
    {
        return 'block w-full rounded-md  border-mute-300 dark:placeholder:text-mute-300 dark:border-mute-500 text-mute-700 shadow-sm focus:border-mute-600 focus:ring-primary-400/50 focus:ring-2 ring-offset-3 sm:text-sm dark:bg-mute-700 dark:text-mute-100';

    }

    public function render()
    {
        return view('mint::components.form.textarea');
    }
}
