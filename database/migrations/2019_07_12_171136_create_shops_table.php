<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('domain', 99)->nullable();
            $table->string('company_name', 159)->nullable();
            $table->string('email', 199)->nullable();
            $table->string('phone', 19)->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('nama_bank')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->bigInteger('reseller_package_id')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
