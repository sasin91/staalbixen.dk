<div>
    <x-checkout-card>
        <x-slot name="heading">
            <div class="bg-blue-700 rounded-t-md px-4 py-5 sm:px-6 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
                <h3 class="text-lg leading-6 font-medium text-white py-2">
                  {{ __('Your Address') }}
                </h3>
              </div>
        </x-slot>

        <form autocomplete="on" class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class='col-span-12'>
                <x-jet-label for='delivery.address_type'>
                    {{ __("Type") }}
                </x-jet-label>

                <x-input.select wire:model='delivery.address_type' class="mt-1 block w-full">
                    @foreach($addressTypes as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </x-input.select>

                <x-jet-input-error for='delivery.address_type' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.customer_name' value='{{ __("Name (Remember last name)") }}' />
                <x-jet-input autofocus autocomplete="name" required id='delivery.customer_name' class='mt-1 block w-full' wire:model.lazy='delivery.customer_name' />
                <x-jet-input-error for='delivery.customer_name' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.customer_email' value='{{ __("Email") }}' />
                <x-jet-input autocomplete="email" required id='delivery.customer_email' class='mt-1 block w-full' wire:model.lazy='delivery.customer_email' type="email" />
                <x-jet-input-error for='delivery.customer_email' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.customer_phone' value='{{ __("Phone") }}' />
                <x-jet-input autocomplete="tel" required id='delivery.customer_phone' class='mt-1 block w-full' wire:model.lazy='delivery.customer_phone' type="tel" />
                <x-jet-input-error for='delivery.customer_phone' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.address' value='{{ __("Address") }}' />
                <x-jet-input autocomplete="street-address" required id='delivery.address' class='mt-1 block w-full' wire:model.lazy='delivery.address' />
                <x-jet-input-error for='delivery.address' class='mt-2' />
            </div>

            <div class='col-span-2'>
                <x-jet-label for='delivery.postal_code' value='{{ __("Postal") }}' />
                <x-jet-input required list="postalCodes" id='delivery.postal_code' class='mt-1 block w-full' wire:model.lazy='delivery.postal_code' type="number" />
                <datalist id="postalCodes">
                    @foreach($this->postalCodes as $code)
                        <option>{{ $code }}</option>
                    @endforeach
                </datalist>
                <x-jet-input-error for='delivery.postal_code' class='mt-2' />
            </div>

            <div class='col-span-10'>
                <x-jet-label for='delivery.city' value='{{ __("City") }}' />
                <x-jet-input required list="cities" id='delivery.city' class='mt-1 block w-full' wire:model.lazy='delivery.city' />
                <datalist id="cities">
                    @foreach($this->cities as $city)
                        <option>{{ $city }}</option>
                    @endforeach
                </datalist>
                <x-jet-input-error for='delivery.city' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.country' value='{{ __("Country") }}' />
                <x-input.select wire:model='delivery.country' class="mt-1 block w-full">
                    @foreach($countries as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </x-input.select>
                <x-jet-input-error for='delivery.country' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.notes' value='{{ __("Notes") }}' />
                <x-input.textarea id="delivery.notes" wire:model='delivery.notes' rows="8" />
                <x-jet-input-error for='delivery.notes' class='mt-2' />
            </div>
        </form>
    </x-checkout-card>

    <x-checkout-card>
        <x-slot name='heading'>
            <div class='pb-5 bg-blue-700 rounded-t-md px-4 py-5 sm:px-6 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0'>
                <h3 class='text-lg leading-6 font-medium text-white py-2'>
                    {{ __('Delivery') }}
                </h3>
            </div>

            <fieldset class="px-6 sm:px-4 py-5">
                <legend id="delivery-providers-label" class="sr-only">
                    {{ __('Delivery') }}
                </legend>
                <ul class="space-y-6" role="radiogroup" aria-labelledby="delivery-providers-label">
                    @foreach($this->deliveryProviders as $index => $deliveryProvider)
                        <li wire:click='selectProvider({{ $deliveryProvider->id }})' id="delivery-providers-option-{{ $index }}" tabindex="{{ $index }}" role="radio" aria-checked="true" class="group relative rounded-lg shadow-sm cursor-pointer focus:outline-none focus:shadow-outline-blue">
                            <div class="rounded-lg border border-gray-300 bg-white px-6 py-4 hover:border-gray-400 group-focus:border-blue-300 sm:flex sm:justify-between sm:space-x-4">
                            <div class="flex items-center space-x-0">
                                <div class="flex-shrink-0 flex items-center hidden">
                                    <span aria-hidden="" class="form-radio text-indigo-600 group-focus:bg-red-500"></span>
                                </div>
                                <div class="text-sm leading-5">
                                    <p class="block font-medium text-gray-900">
                                        {{ $deliveryProvider->name }}
                                    </p>
                                    <div class="text-gray-500">
                                        {{ $deliveryProvider->description }}
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2 font-medium text-gray-900 text-sm leading-5 space-x-1 sm:mt-0 sm:block sm:space-x-0 sm:text-right">
                                {{ Money::format($deliveryProvider->price) }}
                            </p>
                            </div>
                            <div class="{{ $deliveryProvider->is($delivery->provider) ? 'border-indigo-500' : 'border-transparent' }} absolute inset-0 rounded-lg border-2 pointer-events-none"></div>
                        </li>
                    @endforeach
                </ul>
            </fieldset>
        </x-slot>
    </x-checkout-card>
</div>
