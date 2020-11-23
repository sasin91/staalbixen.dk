<a href="{{ route('checkout') }}" type="button" class="inline-flex hover:text-orange">
    <x-heroicon-s-shopping-cart class="w-6 h-6" />
    {{ $this->totalCost }}
</a>