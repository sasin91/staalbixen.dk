<?php

namespace App\Http\Livewire;

use App\Money;
use App\Rules\ValidCurrency;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use function array_merge;
use function config;

trait TracksCurrency
{
    public string $currency = 'DKK';

    public function initializeTracksCurrency()
    {
        $this->currency = (string)Request::query('currency', config('currency.default'));

        $this->queryString = array_merge(
            [
                'currency' => ['except' => '']
            ],
            $this->queryString
        );
    }

    public function updatedCurrency()
    {
        $this->validateOnly(
            'currency',
            [
                'currency' => [new ValidCurrency]
            ]
        );
    }
}
