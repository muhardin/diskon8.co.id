<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wallet_id')->nullable();
            $table->decimal('wallet_in', 22,2)->default(0);
            $table->decimal('wallet_out', 22,2)->default(0);
            $table->string('title')->nullable();
            $table->bigInteger('order_id')->nullable();
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
        Schema::dropIfExists('wallet_activities');
    }
}
