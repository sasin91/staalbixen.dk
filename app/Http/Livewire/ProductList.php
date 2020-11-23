<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;

class ProductList extends Component
{
    use TracksCurrency, TracksSearch, InteractsWithCurrentCart;

    public bool $productWasAdded = false;
    public ?Product $productThatWasAdded = null;

    public ?string $category = null;

    protected $listeners = [
        SearchSelect::EVENT_SELECTED => 'selectCategory'
    ];

    public function getCategoriesProperty()
    {
        return ProductCategory::query()
            ->pluck('name')
            ->all();
    }

    public function selectCategory($category)
    {
        $this->category = $category;
    }

    public function addProductToCart(int $productId)
    {
        $product = $this->addToCart($productId);

        $this->productWasAdded = true;
        $this->productThatWasAdded = $product;
    }

    public function indexQuery()
    {
        return Product::with('latestPrice')
            ->where('stock', '>', 0)
            ->when(
                filled($this->category),
                fn ($query) => $query->whereHas(
                    'category',
                    fn ($category) => $category->where('name', $this->category)
                )
            );
    }

    public function searchQuery()
    {
        return Product::with('latestPrice')
            ->search($this->search);
    }

    public function render()
    {
        return view(
            'livewire.product-list',
            [
                'products' => filled($this->search)
                    ? $this->searchQuery()->paginate()
                    : $this->indexQuery()->paginate(),
            ]
        )
            ->layout('layouts.guest');
    }
}
