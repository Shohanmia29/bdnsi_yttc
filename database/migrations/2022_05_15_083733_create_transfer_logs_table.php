<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_logs', function (Blueprint $table) {
            $table->id();
            $table->string('source_type', 90);
            $table->unsignedBigInteger('source_id');
            $table->string('target_type', 90);
            $table->unsignedBigInteger('target_id');
            $table->decimal('amount');
            $table->unsignedTinyInteger('from_wallet')->nullable();
            $table->unsignedTinyInteger('to_wallet')->nullable();
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
        Schema::dropIfExists('transfer_logs');
    }
}
