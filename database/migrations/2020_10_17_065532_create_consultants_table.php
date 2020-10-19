<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('password');
            $table->integer('commission')->unsigned();
            $table->longText('description');
            $table->integer('active_orders')->default('0');
            $table->integer('sale')->default('0');
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('consultants');
    }
}
