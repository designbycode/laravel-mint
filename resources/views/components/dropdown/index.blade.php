<div
    {{ $attributes->merge(['class' => 'relative ']) }}
    x-data="{ open: false }"
    @click.outside="open = false"
    @keydown.escape.window="open = false"
>
    <!-- Trigger Button -->
    <div
        @click="open = !open"
        @keydown.enter.prevent="open = !open"
        @keydown.space.prevent="open = !open"
        aria-haspopup="true"
        :aria-expanded="open"
    >
        {{ $trigger }}
    </div>


    <!-- Dropdown Menu -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-70 mt-2 {{ $computedWidth }} rounded-md shadow-lg {{ $alignmentClasses }}"
        role="menu"
        style="display: none;"
        @click="open = false"
    >
        <div class="rounded-md {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
