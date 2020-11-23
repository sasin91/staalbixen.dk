<?php

use App\Models\Cart;
use App\Models\DeliveryProvider;
use App\Models\StoredEvent;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();

            $table->string('status');

            $table->foreignIdFor(DeliveryProvider::class, 'provider_id')
                ->nullable()
                ->constrained('delivery_providers');

            $table->string('provider_token')
                ->nullable();

            $table->foreignIdFor(User::class, 'customer_id')
                ->nullable()
                ->constrained('users');

            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();

            $table->string('address_type');
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();

            $table->text('notes')
                ->nullable();

            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
