<div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
        <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
            <defs>
            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
        </svg>
        <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
            <defs>
            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
        </svg>
        <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
            <defs>
            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
        </svg>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1 class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                {{ __('Thanks for the purchase!') }}
            </h1>
            <p class="mt-8 text-xl text-gray-500 leading-8">
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
                                        <div class="h-10 w-32 flex">
                                            <small class="text-gray-300">
                                                x
                                            </small>
                                            <p class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700">
                                                {{ $item->quantity }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </p>
        </div>
    </div>
</div>
