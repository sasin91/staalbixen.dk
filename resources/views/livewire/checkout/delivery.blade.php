<div>
    <x-checkout-card class="bg-white">
        <x-slot name="heading">
            <div class="px-4 py-5 space-y-3 bg-blue-700 border-b border-gray-200 rounded-t-md sm:px-6 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
                <h3 class="py-2 text-lg font-medium leading-6 text-white">
                  {{ __('Your Address') }}
                </h3>
              </div>
        </x-slot>

        <form autocomplete="on" class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class='col-span-12'>
                <x-jet-label for='delivery.address_type'>
                    {{ __("Type") }}
                </x-jet-label>

                <x-input.select wire:model='delivery.address_type' class="block w-full mt-1">
                    @foreach($addressTypes as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </x-input.select>

                <x-jet-input-error for='delivery.address_type' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.customer_name' value='{{ __("Name (Remember last name)") }}' />
                <x-jet-input autofocus autocomplete="name" required id='delivery.customer_name' class='block w-full mt-1' wire:model.lazy='delivery.customer_name' />
                <x-jet-input-error for='delivery.customer_name' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.customer_email' value='{{ __("Email") }}' />
                <x-jet-input autocomplete="email" required id='delivery.customer_email' class='block w-full mt-1' wire:model.lazy='delivery.customer_email' type="email" />
                <x-jet-input-error for='delivery.customer_email' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.customer_phone' value='{{ __("Phone") }}' />
                <x-jet-input autocomplete="tel" required id='delivery.customer_phone' class='block w-full mt-1' wire:model.lazy='delivery.customer_phone' type="tel" />
                <x-jet-input-error for='delivery.customer_phone' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.address' value='{{ __("Address") }}' />
                <x-jet-input autocomplete="street-address" required id='delivery.address' class='block w-full mt-1' wire:model.lazy='delivery.address' />
                <x-jet-input-error for='delivery.address' class='mt-2' />
            </div>

            <div class='col-span-2'>
                <x-jet-label for='delivery.postal_code' value='{{ __("Postal") }}' />
                <x-jet-input required list="postalCodes" id='delivery.postal_code' class='block w-full mt-1' wire:model.lazy='delivery.postal_code' type="number" />
                <datalist id="postalCodes">
                    @foreach($this->postalCodes as $code)
                        <option>{{ $code }}</option>
                    @endforeach
                </datalist>
                <x-jet-input-error for='delivery.postal_code' class='mt-2' />
            </div>

            <div class='col-span-10'>
                <x-jet-label for='delivery.city' value='{{ __("City") }}' />
                <x-jet-input required list="cities" id='delivery.city' class='block w-full mt-1' wire:model.lazy='delivery.city' />
                <datalist id="cities">
                    @foreach($this->cities as $city)
                        <option>{{ $city }}</option>
                    @endforeach
                </datalist>
                <x-jet-input-error for='delivery.city' class='mt-2' />
            </div>

            <div class='col-span-12'>
                <x-jet-label for='delivery.country' value='{{ __("Country") }}' />
                <x-input.select wire:model='delivery.country' class="block w-full mt-1">
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

    <x-checkout-card class="bg-white">
        <x-slot name='heading'>
            <div class='px-4 py-5 pb-5 space-y-3 bg-blue-700 border-b border-gray-200 rounded-t-md sm:px-6 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0'>
                <h3 class='py-2 text-lg font-medium leading-6 text-white'>
                    {{ __('Delivery') }}
                </h3>
            </div>

            <fieldset class="px-6 py-5 sm:px-4">
                <legend id="delivery-providers-label" class="sr-only">
                    {{ __('Delivery') }}
                </legend>
                <ul class="space-y-6" role="radiogroup" aria-labelledby="delivery-providers-label">
                    @foreach($this->deliveryProviders as $index => $deliveryProvider)
                        <li wire:click='selectProvider({{ $deliveryProvider->id }})' id="delivery-providers-option-{{ $index }}" tabindex="{{ $index }}" role="radio" aria-checked="true" class="relative rounded-lg shadow-sm cursor-pointer group focus:outline-none focus:shadow-outline-blue">
                            <div class="px-6 py-4 bg-white border border-gray-300 rounded-lg hover:border-gray-400 group-focus:border-blue-300 sm:flex sm:justify-between sm:space-x-4">
                            <div class="flex items-center space-x-0">
                                <div class="flex items-center flex-shrink-0 hidden">
                                    <span aria-hidden="" class="text-indigo-600 form-radio group-focus:bg-red-500"></span>
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
                            <p class="mt-2 space-x-1 text-sm font-medium leading-5 text-gray-900 sm:mt-0 sm:block sm:space-x-0 sm:text-right">
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
