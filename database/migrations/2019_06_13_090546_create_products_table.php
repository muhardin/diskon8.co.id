<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->string('slug', 220)->nullable();
            $table->string('brand', 220)->nullable();
            $table->integer('category_id')->nullable();
            $table->decimal('agent_price', 22,2)->default(0);
            $table->decimal('selling_price', 22,2)->default(0);
            $table->decimal('profit', 22,2)->default(0);
            $table->decimal('profit_limit', 22,2)->default(0);
            $table->decimal('discount', 22,2)->default(0);
            $table->decimal('weight', 22,2)->default(0);
            $table->string('unit', 7)->nullable();
            $table->text('description')->nullable();
            $table->string('main_image', 255)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('products');
    }
}
