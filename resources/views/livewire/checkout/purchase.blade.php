<x-checkout-card class="mt-6">
    <x-slot name="heading">
        <div class="pb-5 bg-blue-700 rounded-t-md px-4 py-5 sm:px-6 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
            <h3 class="text-lg leading-6 font-medium text-white py-2">
                {{ __('Your purchase') }}
            </h3>
        </div>
    </x-slot>

    <div class="flex-1 flex flex-col justify-between">
        <ul class="divide-y divide-gray-200 overflow-y-auto">
            @foreach($items as $item)
                <li class="px-6 py-5 relative"
                    data-tippy-content="{{ __(':stock remaining', ['stock' => $item->product->stock->value]) }}"
                >
                    <div class="group flex justify-between items-center space-x-4">
                        <a href="#" class="-m-1 p-1 block">
                            <span class="absolute inset-0 group-hover:bg-gray-50"></span>
                            <div class="flex-1 flex items-center min-w-0 relative">
                                <span class="flex-shrink-0 inline-block relative">
                                    <img class="h-10 w-10 rounded-full" src="{{ $item->product->photo_url }}"
                                        alt="{{ __('Photo of :productName', ['productName' => $item->product->name]) }}">
                                    <span
                                        class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full {{ $item->product->stock->css() }}"></span>
                                </span>
                                <div class="ml-4 truncate">
                                    <div
                                        class="text-sm leading-5 font-medium text-gray-900 truncate">{{ $item->product->name }}</div>
                                    <div
                                        class="text-sm leading-5 text-gray-500 truncate">{{ Money::format($item->cost) }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="-m-1 p-1 block text-left">
                            <div class="h-10 w-32">
                                <div
                                    class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                    <button wire:click="removeProductFromCart({{ $item->product_id }})"
                                            class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>

                                    <input id="item_{{ $item->id }}_quantity"
                                            value="{{ $item->quantity }}"
                                            class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none"
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
