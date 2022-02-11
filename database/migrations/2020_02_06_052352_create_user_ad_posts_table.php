<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ad_posts', function (Blueprint $table) {

           $table->bigIncrements('id');

           $table->string('post_title',150);
           $table->string('division',50);
           $table->string('city',50);
           $table->string('authority_types',50);



            $table->string('address',150);
            $table->string('apartment_no',100);
            $table->string('rent_date',50);
            $table->string('tenant',50);


            $table->string('description',500);
            $table->string('space_size', 16, 2);
            $table->string('renters', 16, 2);
            $table->string('utility' ,16, 2)->default(0);
            $table->string('category',80);
            $table->string('floor',50);




            $table->string('bedroom')->default(0);
            $table->string('bathroom')->default(1);
            $table->string('balconi')->default(0);
            $table->string('kitchen')->default(0);
            $table->string('dining_room')->default(0) ;
            $table->string('drawing_room')->default(0) ;
            $table->string('garage')->default(0) ;

            $table->string('closing_time',100);
            $table->string('opening_time',100);

            $table->string('nearest_famous_place_one',300);
            $table->string('nearest_famous_place_two',300);

            $table->text('featured_image')->nullable();
            $table->text('more_image')->nullable();
            
            $table->text('more_image_two')->nullable();
            $table->text('more_image_three')->nullable();
            $table->text('more_image_four')->nullable();
            $table->text('more_image_five')->nullable();
            $table->text('more_image_six')->nullable();

            $table->string('user_id');
            $table->string('mobile',20);
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
        Schema::dropIfExists('user_ad_posts');
    }
}
