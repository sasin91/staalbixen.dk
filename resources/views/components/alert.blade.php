<div {{ $attributes->merge(['class' => $stateClasses ]) }}>
    <div class="flex">
        <div class="flex-shrink-0">
            @svg($icon, ['class' => $iconClasses])
        </div>
        <div class="ml-3">
            <p class="{{ $textClasses }}">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>