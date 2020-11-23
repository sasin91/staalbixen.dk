<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Cart;
use App\Models\User;
use App\Enums\Country;
use Livewire\Livewire;
use App\Models\Product;
use App\Enums\AddressType;
use Illuminate\Support\Arr;
use App\Contracts\CurrentCart;
use App\Http\Livewire\Checkout;
use App\Repositories\CityRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckoutTest extends TestCase
{
    use RefreshDatabase;

    public function testItRendersTheCheckoutPage()
    {
        $this->get(route('checkout'))
            ->assertSuccessful();
    }

    public function testItRedirectsToTheThanksPageOnCompletion()
    {
        $this->seed();

        tap(Cart::factory()->create(), function ($cart) {
            $cart->addProduct(Product::findOrFail(1));
            $this->app->instance(CurrentCart::class, $cart);
        });

        Livewire::test(Checkout::class)
            ->fill(
                [
                    'delivery.provider_id' => 1,
                    'delivery.customer_name' => 'John Doe',
                    'delivery.customer_phone' => '70707070',
                    'delivery.customer_email' => 'john@example.com',
                    'delivery.address_type' => AddressType::PRIVATE,
                    'delivery.address' => 'Somewhere',
                    'delivery.postal_code' => 4200,
                    'delivery.city' => 'Slagelse',
                    'delivery.country' => 'Denmark',
                ]
            )
            ->fill(
                [
                    'payment.gateway' => 'Cash'
                ]
            )
            ->set('conditionsAccepted', true)
            ->call('complete')
            ->assertRedirect();
    }

    public function testItPrefillsTheCustomerInfoFromTheAuthenticatedUser()
    {
        $this->be($user = User::factory()->create());

        Livewire::test(Checkout::class)
            ->assertSet('delivery.customer_name', $user->name);
    }

    public function testSettingTheCountryScopesInTheSuggestedCities()
    {
        $cities = app(CityRepository::class)->allWhereCountry(Country::DNK);

        Livewire::test(Checkout::class)
            ->set('delivery.country', Country::DNK)
            ->assertSet('cities', Arr::pluck($cities, 'city'));
    }

    public function testSettingThePostalCodeResolvesTheExpectedCity()
    {
        Livewire::test(Checkout::class)
            ->set('delivery.country', Country::DNK)
            ->set('delivery.postal_code', 4200)
            ->assertSet('delivery.city', 'Slagelse');
    }
}
