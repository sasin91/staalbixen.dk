<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Request;
use function array_merge;

trait TracksSearch
{
    public string $search = '';

    public function initializeTracksSearch()
    {
        $this->search = (string)Request::query('search');

        $this->queryString = array_merge([
            'search' => ['except' => '']
        ], $this->queryString);
    }
}
