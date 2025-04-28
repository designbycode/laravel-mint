<a
    {{ $attributes->merge(['class' => $classes]) }}
    role="menuitem"
    tabindex="0"
    @keydown.enter.prevent="$el.click()"
    @keydown.space.prevent="$el.click()"
>
    {{ $slot }}
</a>
