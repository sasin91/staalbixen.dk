<?php

namespace App\Console\Commands;

use App\Actions\MarkExpiredCartsAsAbandoned;
use App\Models\Cart;
use Illuminate\Console\Command;

class CartPruneExpiredCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cart:prune-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mark expired carts abandoned & restock the products';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(MarkExpiredCartsAsAbandoned $action)
    {
        $action->execute();

        $this->info(
            __(
                ':count carts had expired.',
                [
                    'count' => Cart::expired()->count()
                ]
            )
        );
    }
}
