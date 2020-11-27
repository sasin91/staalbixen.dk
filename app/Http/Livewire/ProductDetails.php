<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ProductDetails extends Component
{
    public Product $product;
    public bool $viewingPhoto = false;
    public ?string $viewingPhotoUrl = null;

    public function mount()
    {
        $this->product->load('photos');
    }

    public function viewPhoto($photo)
    {
        $this->viewingPhotoUrl = $photo;
        $this->viewingPhoto = true;
    }

    public function render()
    {
        return view('livewire.product-details')
            ->with('qualifyPhotoPath', fn ($path) => Storage::disk('photos')->url($path))
            ->layout('layouts.guest');
    }
}
