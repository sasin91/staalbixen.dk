<?php

namespace App\Contracts;

use App\Aggregates\CartAggregate;
use App\Models\Product;

/**
 * Interface CurrentCart
 *
 * @package App\Contracts
 * @mixin \App\Models\Cart
 */
interface CurrentCart
{
    /**
     * The total cost of the cart
     *
     * @return float
     */
    public function totalCost(): float;

    /**
     * Whether the cart has any items in it
     *
     * @return boolean
     */
    public function isEmpty(): bool;

    /**
     * Whether the cart has an item representing the given product
     *
     * @param Product $product
     *
     * @return boolean
     */
    public function containsProduct(Product $product): bool;

    /**
     * Create a Cart Item for the product or increment the quantity
     *
     * @param Product $product
     *
     * @return CurrentCart
     */
    public function addProduct(Product $product): CurrentCart;

    /**
     * Remove the Cart Item representing the product or decrement the quantity
     *
     * @param Product $product
     *
     * @return CurrentCart
     */
    public function removeProduct(Product $product): CurrentCart;
}
