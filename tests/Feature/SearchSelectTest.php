<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchSelect;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchSelectTest extends TestCase
{
    public function testCanSearchAndReset()
    {
        $options = ['foo', 'bar', 'baz'];

        Livewire::test(SearchSelect::class, ['options' => $options])
            ->set('search', 'ba')
            ->assertSet(
                'options',
                [
                    1 => 'bar',
                    2 => 'baz'
                ]
            )
            ->set('search', '')
            ->assertSet('options', $options);
    }
}
