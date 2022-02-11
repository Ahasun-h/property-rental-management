<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentedListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('User_id',200);
            $table->string('Ad_id',200);
            $table->string('Rental_Data',20);
            $table->string('Rental_amount',50);
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
        Schema::dropIfExists('rented_lists');
    }
}
