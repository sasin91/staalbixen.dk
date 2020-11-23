<?php

namespace App\Http\Livewire;

use App\Models\ContactRequest;
use Livewire\Component;

class Contact extends Component
{
    public bool $sent = false;

    public $contactRequest;

    public function mount()
    {
        $this->contactRequest = new ContactRequest;
    }

    public function rules()
    {
        return [
            'contactRequest.full_name' => ['required', 'string', 'min:3', 'max:255'],
            'contactRequest.email' => ['required_without:contactRequest.phone', 'email'],
            'contactRequest.phone' => ['required_without:contactRequest.email', 'numeric'],
            'contactRequest.message' => ['required', 'string', 'max:65550']
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function createContactRequest()
    {
        $this->validate();

        $this->contactRequest->saveOrFail();

        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact')
            ->layout('layouts.guest');
    }
}
