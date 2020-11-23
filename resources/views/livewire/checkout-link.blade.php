<button onclick="window.location = '{{ route('checkout') }}';" class="pointer-cursor inline-flex hover:text-orange">
    <x-heroicon-s-shopping-cart class="w-6 h-6" />
    {{ $this->totalCost }}
</button>
