<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;

class FormTextarea extends Component
{
    public function __construct(
        public bool    $autoGrow = false,
        public ?string $name,
    )
    {
    }

    public function classes(): string
    {
        return 'block w-full rounded-md border-gray-300 dark:border-gray-500 text-gray-700  shadow-sm focus:border-gray-600 focus:ring-gray-300 focus:ring-2 ring-offset-3 sm:text-sm';
    }

    public function render()
    {
        return view('mint::components.form.textarea');
    }
}
