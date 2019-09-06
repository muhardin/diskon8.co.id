<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id');
            $table->bigInteger('product_id')->nullable();
            $table->string('name')->nullable();
            $table->enum('order_type', ['product', 'shipping', 'payment', 'discount']);
            $table->decimal('amount', 22,2)->default(0);
            $table->integer('quantity')->default(0);
            $table->enum('order_status', ['prospect', 'pending', 'paid', 'processing', 'packing', 'delivering', 'success', 'failed', 'canceled'])->default('prospect');
            $table->text('shipping_status')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
