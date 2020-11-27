<div class="container px-4 py-6 mx-auto mt-2 bg-white shadow">
    <div>
        <h3 class="text-lg font-medium leading-6 text-gray-900">
            {{ $product->name }}
        </h3>
        <p class="max-w-2xl mt-1 text-sm text-gray-500">
            {{ $product->description }}
        </p>
    </div>
    <div class="mt-5 border-t border-gray-200">
        <div class="grid grid-cols-1 gap-2 pt-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <img
                wire:click='viewPhoto("{{ $product->photo_url }}")'
                class="object-fill mx-auto rounded-sm shadow cursor-pointer pointer-events-auto bg-gray-50"
                src="{{ $product->photo_url }}"
                alt="{{ __('Photo of :product', ['product' => $product->name]) }}"
            >

        @foreach ($product->photos as $photo)
            <img
                wire:click='viewPhoto("{{ $qualifyPhotoPath($photo->path) }}")'
                class="object-fill mx-auto rounded-sm shadow cursor-pointer pointer-events-auto bg-gray-50"
                src="{{ $qualifyPhotoPath($photo->path) }}"
                alt="{{ $photo->name }}"
            >
        @endforeach
        </div>
    </div>

    <x-jet-modal wire:model='viewingPhoto'>
        <img
            class="w-full h-full"
            src="{{ $viewingPhotoUrl }}"
        >
    </x-jet-modal>
</div>
