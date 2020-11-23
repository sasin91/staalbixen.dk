<div class="relative bg-white">
    <div class="absolute inset-0">
      <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
      <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
        <div class="max-w-lg mx-auto">
          <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
              {{ __('Contact me for an non-binding offer.')}}
          </h2>
          <p class="mt-3 text-lg leading-6 text-gray-500">
            StålBixen /v Rune Chr. Hansen
          </p>
          <dl class="mt-8 text-base text-gray-500">
            <div>
              <dt class="sr-only">{{ __('Postal address') }}</dt>
              <dd>
                <p>Sorøvej 57</p>
                <p>4291 Ruds Vedby</p>
              </dd>
            </div>
            <div class="mt-6">
              <dt class="sr-only">{{ __('Phone number') }}</dt>
              <dd class="flex">
                <!-- Heroicon name: phone -->
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="ml-3">
                  <a href="tel:+4520912151">
                    2091 2151
                  </a>
                </span>
              </dd>
            </div>
            <div class="mt-3">
              <dt class="sr-only">Email</dt>
              <dd class="flex">
                <!-- Heroicon name: mail -->
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="ml-3">
                    staalbixen@gmail.com
                </span>
              </dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
        @if ($sent)
        <x-alert type="success">
            <h3 class="text-sm font-medium text-green-800">
                {{ __('Thanks, your message has been received.') }}
            </h3>
            <div class="mt-2 text-sm text-green-700">
                <p>
                    {{ __("I'll reach out to you shortly.") }}
                </p>
            </div>
        </x-alert>
        @endif

        <div class="max-w-lg mx-auto lg:max-w-none">
          <form wire:submit.prevent='createContactRequest' class="grid grid-cols-1 gap-y-6">
              <div class='col-span-6 sm:col-span-4'>
                  <x-jet-label for='contactRequest.full_name' value='{{ __("Name") }}' />
                  <x-jet-input id='contactRequest.full_name' class='mt-1 block w-full' wire:model.lazy='contactRequest.full_name' required />
                  <x-jet-input-error for='contactRequest.full_name' class='mt-2' />
              </div>

              <div class='col-span-6 sm:col-span-4'>
                  <x-jet-label for='contactRequest.email' value='{{ __("E-Mail") }}' />
                  <x-jet-input id='contactRequest.email' class='mt-1 block w-full' wire:model.lazy='contactRequest.email' type="email" />
                  <x-jet-input-error for='contactRequest.email' class='mt-2' />
              </div>

              <div class='col-span-6 sm:col-span-4'>
                  <x-jet-label for='contactRequest.phone' value='{{ __("Phone") }}' />
                  <x-jet-input id='contactRequest.phone' class='mt-1 block w-full' wire:model.lazy='contactRequest.phone' type="tel" />
                  <x-jet-input-error for='contactRequest.phone' class='mt-2' />
              </div>

              <div class='col-span-6 sm:col-span-4'>
                  <x-jet-label for='contactRequest.message' value='{{ __("Message") }}' />
                  <textarea wire:model='contactRequest.message' rows="4" class="form-input rounded-md shadow-sm w-full" placeholder="{{ __('Message') }}"></textarea>
                  <x-jet-input-error for='contactRequest.message' class='mt-2' />
              </div>

            <div>
              <button {{ $sent ? 'disabled' : '' }} wire:loading.attr='disabled' type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  <x-heroicon-s-mail class="w-5 h-5" />
                {{ __('Send') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
