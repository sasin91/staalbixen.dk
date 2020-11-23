<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Assert;
use Illuminate\View\Component;
use PHPUnit\Framework\ExpectationFailedException;

class Alert extends Component
{
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';
    const TYPE_SUCCESS = 'success';

    protected string $type = 'info';

    public static function flash(string $type, string $message)
    {
        Session::flash(
            'alert',
            [
                'type' => $type,
                'message' => $message
            ]
        );
    }

    /**
     * Create a new component instance.
     * 
     * @param string $type
     * 
     * @throws ExpectationFailedException 
     * @return void
     */
    public function __construct(string $type = self::TYPE_INFO)
    {
        Assert::assertContains(
            $type,
            [
                self::TYPE_ERROR,
                self::TYPE_INFO,
                self::TYPE_SUCCESS,
                self::TYPE_WARNING
            ]
        );

        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert')->with(
            [
                self::TYPE_WARNING => [
                    'stateClasses' => 'border-l-4 p-4 bg-yellow-50 border-yellow-400',
                    'iconClasses' => 'h-5 w-5 text-yellow-400',
                    'icon' => 'heroicon-s-exclamation',
                    'textClasses' => 'text-sm leading-5 text-orange-600'
                ],
                self::TYPE_SUCCESS => [
                    'stateClasses' => 'border-l-4 p-4 bg-green-50 border-green-400',
                    'iconClasses' => 'h-5 w-5 text-green-400',
                    'icon' => 'heroicon-s-check',
                    'textClasses' => 'text-sm leading-5 text-green-600'
                ],
                self::TYPE_INFO => [
                    'stateClasses' => 'border-l-4 p-4 bg-blue-50 border-blue-400',
                    'iconClasses' => 'h-5 w-5 text-blue-400',
                    'icon' => 'heroicon-s-information-circle',
                    'textClasses' => 'text-sm leading-5 text-blue-600'
                ],
                self::TYPE_ERROR => [
                    'stateClasses' => 'border-l-4 p-4 bg-red-50 border-red-400',
                    'iconClasses' => 'h-5 w-5 text-red-400',
                    'icon' => 'heroicon-s-x-circle',
                    'textClasses' => 'text-sm leading-5 text-red-600'
                ]
            ][$this->type]
        );
    }
}
