<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInterestedPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_interested_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_id',150);
            $table->string('post_title',300);
            $table->string('post_division',150);
            $table->string('post_city',150);
            $table->string('post_address',250);
            $table->string('post_category',250);
            $table->string('renters',250);
            $table->string('rent_date',250);
            $table->string('user_id',250);
            $table->string('user_name',250);
            $table->string('user_mobile',250);
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
        Schema::dropIfExists('user_interested_posts');
    }
}
