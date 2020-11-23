<?php

namespace App\Http\Livewire;

use Livewire\Component;
use function filled;

class SearchSelect extends Component
{
    const EVENT_SELECTED = 'Selected';

    /**
     * Whether the select field is visible
     *
     * @var bool
     */
    public bool $visible = false;

    /**
     * The initial options
     *
     * @var array
     */
    public array $initialOptions = [];

    /**
     * The selectable options
     *
     * @var array
     */
    public array $options = [];

    /**
     * The selected option
     *
     * @var mixed
     */
    public $selected = null;

    public string $search = '';
    public ?string $optionView = null;
    public ?string $selectedView = null;

    public ?string $placeholder = null;

    public function mount(
        array $options,
        $optionView = null,
        $selectedView = null,
        bool $visible = false
    ) {
        $this->initialOptions = $options;
        $this->options = $options;
        $this->optionView = $optionView;
        $this->selectedView = $selectedView;
        $this->visible = $visible;
    }

    public function updatedSearch()
    {
        if (filled($this->search)) {
            $this->options = preg_grep("/^{$this->search}/i", $this->initialOptions);
        } else {
            $this->options = $this->initialOptions;
        }
    }

    public function updatedSelected($value)
    {
        $this->emitUp(self::EVENT_SELECTED, $value);
    }

    public function render()
    {
        return view('livewire.search-select');
    }
}
