<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_id',100);
            $table->string('owner_id',100);
            $table->string('owner_name',100);
            $table->string('customer_id',100);
            $table->string('customer_name',100);
            $table->string('deal_amount',100);
            $table->string('price_amount',100);
            $table->string('deal_date',100);
              $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('user_histories');
    }
}
