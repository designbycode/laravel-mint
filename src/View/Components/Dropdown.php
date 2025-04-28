<?php

namespace Designbycode\LaravelMint\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public readonly string $alignmentClasses;

    public readonly string $computedWidth;

    public function __construct(
        public readonly string $align = 'right',
        public readonly string $width = '48',
        public readonly string $contentClasses = 'py-1 bg-white dark:bg-mute-700 focus:outline-none focus:ring-2 focus:ring-offset-3  ',
    ) {
        $this->alignmentClasses = match ($align) {
            'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
            'top' => 'origin-top',
            'center' => 'ltr:origin-center',
            default => 'ltr:origin-top-right rtl:origin-top-left end-0',
        };

        $this->computedWidth = match ($width) {
            '48' => 'w-48',
            '60' => 'w-60',
            default => $width,
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('mint::components.dropdown.index');
    }
}
