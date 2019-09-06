<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellerPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->decimal('price', 22,2)->default(0);
            $table->text('description_price')->nullable();
            $table->integer('maximum_product_sale')->nullable();
            $table->decimal('minimum_price_sale', 22,2)->default(0);
            $table->text('benefit')->nullable();
            $table->text('other_rule')->nullable();
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
        Schema::dropIfExists('reseller_packages');
    }
}
