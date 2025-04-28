<?php

namespace Designbycode\LaravelMint\View\Components;

use Designbycode\LaravelMint\Enums\ButtonVariant;
use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public readonly ButtonVariant $resolvedVariant;

    public function __construct(
        public readonly string      $type = 'submit',
        public string|ButtonVariant $variant = 'fresh',
        public readonly string      $color = 'primary',
        public readonly string      $size = 'md',
        public readonly bool        $loading = false,
    )
    {
        $this->resolvedVariant = $variant instanceof ButtonVariant
            ? $variant
            : ButtonVariant::from(strtolower($variant));
    }

    public function classes(): string
    {
        $variant = $this->variant instanceof ButtonVariant
            ? $this->variant
            : ButtonVariant::from($this->variant);

        $baseClasses = 'inline-flex text-shadow-xs cursor-pointer items-center justify-center disabled:opacity-50 font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-3 transition-colors duration-200';

        $sizeClasses = [
            'xs' => 'px-1.5 py-0.5 text-xs',
            'sm' => 'px-3 py-1.5 text-xs',
            'md' => 'px-4 py-2 text-sm',
            'lg' => 'px-6 py-3 text-base',
            'xl' => 'px-8 py-3 text-lg',
            '2xl' => 'px-12 py-4 text-lg',
        ][$this->size] ?? 'px-4 py-2 text-sm';

        $variantClasses = $variant->colorClass($this->color);

        return "{$baseClasses} {$sizeClasses} {$variantClasses}";
    }

    public function render(): View
    {
        return view('mint::components.button.index');
    }
}
