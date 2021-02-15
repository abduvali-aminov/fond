<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->unsignedBigInteger('cause_id');
            $table->foreign('cause_id')->references('id')->on('causes')->onDelete('cascade');
            $table->text('description');
            $table->text('photo_1');
            $table->text('photo_2');
            $table->text('photo_3');
            $table->string('address');
            $table->unsignedDouble('required_amount');
            $table->unsignedBigInteger('summa_id');
            $table->foreign('summa_id')->references('id')->on('summa_types')->onDelete('cascade');
            $table->integer('status')->default();
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
        Schema::dropIfExists('applies');
    }
}
