<?php

use App\Enums\AddressType;
use App\Enums\Country;
use App\Enums\DeliveryStatus;
use App\Enums\PaymentMethod;

return [
    AddressType::class => [
        AddressType::PRIVATE => "Privat Addresse",
        AddressType::COMPANY => "Firma Addresse"
    ],

    Country::class => [
        Country::DNK => 'Danmark'
    ],

    DeliveryStatus::class => [
        DeliveryStatus::INCOMPLETE => 'Ukomplet',
        DeliveryStatus::PENDING => 'Afventer',
        DeliveryStatus::IN_TRANSIT => 'Under levering',
        DeliveryStatus::DELIVERED => 'Leveret',
        DeliveryStatus::RETURNED => 'Returneret'
    ]
];
