<div
    @if($autoGrow)
        x-data="{
        resize() {
            this.$refs.textarea.style.height = 'auto';
            this.$refs.textarea.style.height = this.$refs.textarea.scrollHeight + 'px';
        }
    }"
    x-init="$nextTick(() => resize())"
    @endif
>
    <textarea
        x-ref="textarea"
        {{ $attributes }}
        @input="resize()"
        @class([
        $classes,
        'resize-none overflow-hidden' => $autoGrow,
        'border-danger-600' => $errors->has($name)
        ])
    >
        {{ $slot }}
    </textarea>
</div>
