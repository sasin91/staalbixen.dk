<x-checkout-card class="bg-white">
    <x-slot name='heading'>
        <div class='px-4 py-5 pb-5 space-y-3 bg-blue-700 border-b border-gray-200 rounded-t-md sm:px-6 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0'>
            <h3 class='py-2 text-lg font-medium leading-6 text-white'>
                {{ __('Payment') }}
            </h3>
        </div>
    </x-slot>

    <fieldset class="px-6 py-5 sm:px-4">
        <legend id="payment-gateways-label" class="sr-only">
            {{ __('Payment') }}
        </legend>
        <ul class="space-y-6" role="radiogroup" aria-labelledby="payment-gateways-label">
            @foreach($this->gateways as $index => $paymentGateway)
                <li wire:click='$set("payment.gateway", "{{ $paymentGateway->name }}")' id="payment-gateways-option-{{ $index }}" tabindex="{{ $index }}" role="radio" aria-checked="true" class="relative rounded-lg shadow-sm cursor-pointer group focus:outline-none focus:shadow-outline-blue">
                    <div class="px-6 py-4 bg-white border border-gray-300 rounded-lg hover:border-gray-400 group-focus:border-blue-300 sm:flex sm:justify-between sm:space-x-4">
                        <div class="flex items-center space-x-0">
                            <div class="flex items-center flex-shrink-0 hidden">
                                <span aria-hidden="" class="text-indigo-600 form-radio group-focus:bg-red-500"></span>
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
