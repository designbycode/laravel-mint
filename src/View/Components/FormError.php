<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FormError extends Component
{
    public function __construct(
        public ?string $for
    ) {}

    public function classes(): string
    {
        return 'text-sm text-rose-600 dark:text-red-400';
    }

    public function render(): View
    {
        return view('mint::components.form.error');
    }
}
