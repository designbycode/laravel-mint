<?php

namespace Designbycode\LaravelMint\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FormSection extends Component
{
    /**
     * {@inheritDoc}
     */
    public function render(): View
    {
        return view('mint::components.form.section');
    }
}
