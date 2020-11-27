<div {!! $attributes->merge(['class' => 'overflow-hidden shadow rounded-md pb-4 mt-6']) !!}>
    @isset($heading)
        {{ $heading }}
    @endisset

    <div class="px-4 py-5 sm:p-6">
        {{ $slot }}
    </div>

    @isset($footer)
        {{ $footer }}
    @endisset
</div>
