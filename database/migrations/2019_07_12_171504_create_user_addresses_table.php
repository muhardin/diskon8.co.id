<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->string('title', 99)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 99)->nullable();
            $table->string('subdistrict', 99)->nullable();
            $table->string('province', 99)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('contact_person', 199)->nullable();
            $table->string('phone', 19)->nullable();
            $table->boolean('is_main_address')->nullable();
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
        Schema::dropIfExists('user_addresses');
    }
}
