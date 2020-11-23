<select 
    {{ $attributes->merge(['class' => "mt-1 form-select rounded-md shadow-sm block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5"]) }}
    autocomplete="off"
>
    {{ $slot }}
</select>