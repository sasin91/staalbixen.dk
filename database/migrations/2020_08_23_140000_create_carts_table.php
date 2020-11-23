<?php

use App\Models\Delivery;
use App\Models\Payment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('session_id');
            $table->foreignIdFor(Payment::class)->nullable()->constrained();
            $table->foreignIdFor(Delivery::class)->nullable()->constrained();
            $table->decimal('total_cost', 14, 4)->default(0);
            $table->timestamp('abandoned_at')->nullable();
            $table->timestamp('purchased_at')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
