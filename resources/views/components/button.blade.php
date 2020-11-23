<span {{ $attributes->except(['wire:click', 'disabled'])->merge(['class' => $cssClasses['border'] . 'inline-flex shadow-sm button-2 group']) }}>
    <button {{ $attributes->wire('click') }} {{ $attributes->get('disabled') }} class="{{ $cssClasses['text'] }} inline-flex items-center px-6 py-3 text-base leading-6 font-medium focus:outline-none transition ease-in-out duration-150">
        @if(filled($href))
            <a href="{{ $href }}">
                {{ $slot }}
            </a>
        @else
            {{ $slot }}
        @endif
    </button>
</span>
