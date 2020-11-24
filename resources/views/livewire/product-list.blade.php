@push('scripts')
    <script type="text/javascript" defer>
        // The stock is updated everytime the Cart:updated event is fired; so we'll rehydrate the tooltips to reflect that.
        Livewire.on('Cart:updated', () => tippy('[data-tippy-content]', {
            allowHTML: true
        }))
    </script>
@endpush

@push('head')
<meta
  name="description"
  content="StålBixens tilbyder alt i stål arbejde samt overfladebehandling."
/>
@endpush

<div class="px-4 py-5 sm:px-6 bg-gray-100">
    <div
        class="bg-gray-50 -ml-4 -mt-2 flex justify-around flex-wrap sm:flex-no-wrap px-4 py-5 sm:px-6 border-b border-gray-200">
        <div class="w-full max-w-xl ml-4 mt-2 flex-shrink-0">
            <div class="relative flex-grow focus-within:z-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-heroicon-s-selector class="text-orange-700 w-6 h-6" />
                </div>

                <livewire:search-select
                    :options="$this->categories"
                    placeholder="{{ __('Select category') }}"
                />
            </div>
        </div>

        <div class="w-full max-w-xl ml-4 mt-2 flex-shrink-0">
            <div class="relative flex-grow focus-within:z-10 border-b border-blue-600">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-heroicon-s-search class="text-blue-700 w-6 h-6" />
                </div>
                <label>
                    <input
                        wire:model.lazy="search"
                        type="search"
                        autocomplete="search"
                        aria-autocomplete="both"
                        spellcheck="on"
                        autofocus="on"
                        autocorrect="on"
                        class="form-input block w-full border-none text-blue-600 bg-transparent pt-2 pl-10 sm:text-sm sm:leading-5"
                        placeholder="{{ __('search') }}"
                    />
                </label>
            </div>
        </div>
    </div>

    {{ $products->links() }}

    <div class="px-4 py-5 sm:px-6">
        <x-notification wire:model="productWasAdded">
            @if ($productThatWasAdded)
                <p class="text-sm leading-5 font-medium text-gray-900">
                    {{ __(':productName was added to cart.', ['productName' => $productThatWasAdded->name]) }}
                </p>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    {{ Money::format($productThatWasAdded->latestPrice->amount) }}
                </p>
              <div class="mt-4 flex">
                <a href="{{ route('checkout') }}" type="button" class="text-sm leading-5 font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    {{ __('Go to checkout') }}
                </a>
              </div>
            @endif
        </x-notification>

        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow">
                    <div class="flex-1 flex flex-col p-8">
                        <img class="h-56 w-full object-fill flex-shrink-0 mx-auto bg-gray-50 rounded-sm shadow"
                            src="{{ $product->photo_url }}"
                            alt="{{ __('Photo of :product', ['product' => $product->name]) }}">
                        <h3 class="mt-6 text-gray-900 text-sm leading-5 font-medium">
                            {{ $product->name }}
                        </h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                            <dt class="sr-only">{{ __('Stock') }}</dt>
                            <dd data-tippy-content="{{ __('We have :stock left of :product.', ['stock' => $product->stock->value, 'product' => $product->name]) }}"
                                class="text-gray-500 text-sm leading-5 flex">
                                <x-heroicon-s-collection class="text-gray-300 h-5 w-5" />
                                {{ $product->stock->value }}
                            </dd>
                            <dt class="sr-only">{{ __('price') }}</dt>
                            <dd class="mt-3">
                                <span
                                    class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full flex">
                                    <x-heroicon-s-tag class="h-5 w-5 text-blue-600" />
                                    {{ Money::format($product->latestPrice->amount) }}
                                </span>
                            </dd>
                        </dl>
                    </div>
                    <div class="border-t border-gray-200">
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex border-2 border-green-500 hover:bg-green-500 group">
                                <a wire:click="addProductToCart({{ $product->id }})" href="#"
                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg group-hover:text-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                    <x-heroicon-s-shopping-cart class="w-5 h-5 text-blue-600 group-hover:text-white" />
                                    <span class="ml-3">{{ __('buy') }}</span>
                                </a>
                            </div>

                            <div class="-ml-px w-0 flex-1 flex">
                                <a href="{{ route('products.show', $product) }}"
                                    class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                    <x-heroicon-s-information-circle class="w-5 h-5 text-teal-400" />
                                    <span class="ml-3">{{ __('details') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
