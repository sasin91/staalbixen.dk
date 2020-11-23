<?php

namespace App\View\Components;

use Illuminate\Testing\Assert;
use Illuminate\View\Component;

class Button extends Component
{
    protected array $cssClasses = [
        'gray' => [
            'border' => 'border-2 border-gray-300 rounded-md focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50',
            'text' => 'text-gray-700 group-hover:text-gray-500 active:text-gray-800'
        ],
        'green' => [
            'border' => 'bg-white border-2 border-green-600 hover:bg-green-600 hover:bg-green-600 focus:shadow-outline-green-900 active:bg-green-50',
            'text' => 'text-green-700 group-hover:text-white active:text-green-800'
        ],
        'orange' => [
            'border' => 'bg-white border-2 border-orange-600 hover:bg-orange-600 hover:bg-orange-600 focus:shadow-outline-orange-900 active:bg-orange-50',
            'text' => 'text-orange-700 group-hover:text-white active:text-orange-800'
        ]
    ];

    public string $color;
    public ?string $href;

    /**
     * Create a new component instance.
     *
     * @param string $color
     * @param string|null $href <Route name or path>
     * @return void
     */
    public function __construct(string $color, ?string $href = null)
    {
        Assert::assertArrayHasKey($color, $this->cssClasses);

        $this->color = $color;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button', [
            'cssClasses' => $this->cssClasses[$this->color]
        ]);
    }
}
