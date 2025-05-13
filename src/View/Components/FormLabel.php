<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FormLabel extends Component
{
    public function classes(): string
    {
        return 'block text-sm font-medium';
    }

    public function render(): View
    {
        return view('mint::components.form.label');
    }
}
