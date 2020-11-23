<?php

use App\Enums\PaymentCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomyReportsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());

        DB::statement($this->createView());
    }

    private function dropView(): string
    {
        return <<<SQL
DROP VIEW IF EXISTS `economy_reports`;
SQL;
    }

    private function createView(): string
    {
        $revenue = PaymentCategory::REVENUE;
        $expense = PaymentCategory::EXPENSE;

        return <<<SQL
CREATE VIEW `economy_reports` AS

SELECT
    DATE_FORMAT(`created_at`, '%Y-%m-%d') AS day,
    SUM(CASE WHEN type = "$revenue" THEN amount END) AS revenue,
    SUM(CASE WHEN type = "$expense" THEN amount END) AS expense,
    SUM(amount) as total
FROM payments
GROUP BY
    day
SQL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropView();
    }
}
