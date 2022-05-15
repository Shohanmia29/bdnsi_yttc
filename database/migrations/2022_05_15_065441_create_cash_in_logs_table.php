<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashInLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_in_logs', function (Blueprint $table) {
            $table->id();
            $table->string('target_type', 90);
            $table->unsignedBigInteger('target_id');
            $table->string('reference_type', 90);
            $table->unsignedBigInteger('reference_id');
            $table->decimal('amount');
            $table->unsignedTinyInteger('wallet');
            $table->unsignedTinyInteger('method');
            $table->string('message')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_in_logs');
    }
}
