<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('shop_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('reseller_id')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('amount', 22,2)->default(0);
            $table->enum('order_status', ['pending', 'prospect', 'paid', 'processing', 'packing', 'delivering', 'success', 'failed', 'canceled'])->default('pending');
            $table->string('payment_method', 55)->nullable();
            $table->text('payment_reference')->nullable();
            $table->string('shipping_method', 55)->nullable();
            $table->string('shipping_package', 55)->nullable();
            $table->string('shipping_price', 55)->nullable();
            $table->text('shipping_status')->nullable();
            $table->string('invoice_number', 29)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
