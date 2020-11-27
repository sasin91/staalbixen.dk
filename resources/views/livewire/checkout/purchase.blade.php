<x-checkout-card class="bg-white">
    <x-slot name="heading">
        <div class="px-4 py-5 pb-5 space-y-3 bg-blue-700 border-b border-gray-200 rounded-t-md sm:px-6 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
            <h3 class="py-2 text-lg font-medium leading-6 text-white">
                {{ __('Your purchase') }}
            </h3>
        </div>
    </x-slot>

    <div class="flex flex-col justify-between flex-1">
        <ul class="overflow-y-auto divide-y divide-gray-200">
            @foreach($items as $item)
                <li class="relative px-6 py-5"
                    data-tippy-content="{{ __(':stock remaining', ['stock' => $item->product->stock->value]) }}"
                >
                    <div class="flex items-center justify-between space-x-4 group">
                        <a href="#" class="block p-1 -m-1">
                            <span class="absolute inset-0 group-hover:bg-gray-50"></span>
                            <div class="relative flex items-center flex-1 min-w-0">
                                <span class="relative flex-shrink-0 inline-block">
                                    <img class="w-10 h-10 rounded-full" src="{{ $item->product->photo_url }}"
                                        alt="{{ __('Photo of :productName', ['productName' => $item->product->name]) }}">
                                    <span
                                        class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full {{ $item->product->stock->css() }}"></span>
                                </span>
                                <div class="ml-4 truncate">
                                    <div
                                        class="text-sm font-medium leading-5 text-gray-900 truncate">{{ $item->product->name }}</div>
                                    <div
                                        class="text-sm leading-5 text-gray-500 truncate">{{ Money::format($item->cost) }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="block p-1 -m-1 text-left">
                            <div class="w-32 h-10">
                                <div
                                    class="relative flex flex-row w-full h-10 mt-1 bg-transparent rounded-lg">
                                    <button wire:click="removeProductFromCart({{ $item->product_id }})"
                                            class="w-20 h-full text-gray-600 bg-gray-300 rounded-l outline-none cursor-pointer hover:text-gray-700 hover:bg-gray-400">
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>

                                    <input id="item_{{ $item->id }}_quantity"
                                            value="{{ $item->quantity }}"
                                            class="flex items-center w-full font-semibold text-center text-gray-700 bg-gray-300 outline-none cursor-default focus:outline-none text-md hover:text-black focus:text-black md:text-base"
                                    />

                                    <button
                                        {{ $item->product->stock->none() ? 'disabled' : null }} wire:click="addProductToCart({{ $item->product_id }})"
                                        class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r {{ $item->product->stock->none() ? 'cursor-not-allowed' : 'cursor-pointer' }}">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-checkout-card>
