<x-checkout-card>
    <x-slot name='heading'>
        <div class='pb-5 bg-blue-700 rounded-t-md px-4 py-5 sm:px-6 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0'>
            <h3 class='text-lg leading-6 font-medium text-white py-2'>
                {{ __('Payment') }}
            </h3>
        </div>
    </x-slot>

    <fieldset class="px-6 sm:px-4 py-5">
        <legend id="payment-gateways-label" class="sr-only">
            {{ __('Payment') }}
        </legend>
        <ul class="space-y-6" role="radiogroup" aria-labelledby="payment-gateways-label">
            @foreach($this->gateways as $index => $paymentGateway)
                <li wire:click='$set("payment.gateway", "{{ $paymentGateway->name }}")' id="payment-gateways-option-{{ $index }}" tabindex="{{ $index }}" role="radio" aria-checked="true" class="group relative rounded-lg shadow-sm cursor-pointer focus:outline-none focus:shadow-outline-blue">
                    <div class="rounded-lg border border-gray-300 bg-white px-6 py-4 hover:border-gray-400 group-focus:border-blue-300 sm:flex sm:justify-between sm:space-x-4">
                        <div class="flex items-center space-x-0">
                            <div class="flex-shrink-0 flex items-center hidden">
                                <span aria-hidden="" class="form-radio text-indigo-600 group-focus:bg-red-500"></span>
                            </div>
                            <div class="text-sm leading-5">
                                <p class="flex font-medium text-gray-900">
                                    @svg($paymentGateway->icon, 'h-5 w-5')
                                    {{ __($paymentGateway->name) }} ({{ Money::format($this->cart->totalCost()) }})
                                </p>
                                <div class="text-gray-500">
                                    {{ __($paymentGateway->description) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $paymentGateway->name === $payment->gateway ? 'border-indigo-500' : 'border-transparent' }} absolute inset-0 rounded-lg border-2 pointer-events-none"></div>
                </li>
            @endforeach
        </ul>
    </fieldset>
</x-checkout-card>
