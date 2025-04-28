<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Form extends Component
{
    public function __construct(
        public string $method = 'POST',
    ) {}

    public function render(): View
    {
        return view('mint::components.form.index');
    }
}
