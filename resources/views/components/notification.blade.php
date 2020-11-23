<div 
    x-data="{ 
        visible: @entangle($attributes->wire('model')),
        closeAfterInterval() {
            setInterval(
                () => this.visible = false,
                15200
            )
        }
    }" 
    x-init="closeAfterInterval"
    class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end"
>
    <div
        class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto" 
        x-show="visible" 
        x-on:click="visible = false"  
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="rounded-lg shadow-xs overflow-hidden">
        <div class="p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <x-heroicon-s-check-circle class="h-6 w-6 text-green-400" />
                </div>
                <div class="ml-3 w-0 flex-1 pt-0.5">
                    {{ $slot }}
                </div>
                <div class="ml-4 flex-shrink-0 flex">
                    <button x-on:click="visible = false" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                        <x-heroicon-s-x class="h-5 w-5" />
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>