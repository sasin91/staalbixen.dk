@push('scripts')
    <script type="text/javascript" defer>
        // The stock is updated everytime the Cart:updated event is fired; so we'll rehydrate the tooltips to reflect that.
        Livewire.on('Cart:updated', () => tippy('[data-tippy-content]', {
            allowHTML: true
        }))
    </script>
@endpush

<x-checkout-card class="mb-6">
    @if ($this->cart->isEmpty())
        <x-alert type="info">
            {{ __('Your cart is empty.') }}
        </x-alert>
    @endif

    @include('livewire.checkout.delivery')
    @include('livewire.checkout.payment')
    @include('livewire.checkout.purchase')

    <div class="flex-1 flex flex-col justify-between space-y-2 mt-6">
        <div class="flex items-center justify-between">
            <p>{{ __('Total incl. taxes') }}</p>
            <p>{{ Money::format($this->cart->totalCost()) }}</p>
        </div>

        <div class="flex items-center justify-between">
            <span class="flex-grow flex flex-col" id="toggleLabel">
                <span class="text-sm leading-5 font-medium text-gray-900">{{ __('I accept the following:') }}</span>
                <ol class="list-none">
                    <li class="text-sm leading-normal underline text-indigo-700 hover:text-indigo-500">
                        <a target="_blank" href="{{ route('terms') }}">{{ __('Terms of service') }}</a>
                    </li>
                    <li class="text-sm leading-normal underline text-indigo-700 hover:text-indigo-500">
                        <a target="_blank" href="{{ route('privacy') }}">{{ __('Privacy conditions') }}</a>
                    </li>
                </ol>
            </span>

            <span wire:click='$toggle("conditionsAccepted")' role="checkbox" tabindex="0" aria-checked="false" aria-labelledby="toggleLabel" class="{{ $conditionsAccepted ? 'bg-indigo-600' : 'bg-gray-200' }} relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline">
                <span aria-hidden="true" class="{{ $conditionsAccepted ? 'translate-x-5' : 'translate-x-0' }} inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200"></span>
            </span>
        </div>

        @if ($errors->any())
            <x-alert type="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif

        @if ($this->cart->isEmpty())
        <x-button color='gray' disabled>
            {{ __('Your cart is empty.') }}
        </x-button>
        @else
        <x-button class="w-full text-center" color="green" wire:loading.attr='disabled' wire:click='complete'>
            {{ __('Go to payment') }}
        </x-button>
        @endif
    </div>
</x-checkout-card>
