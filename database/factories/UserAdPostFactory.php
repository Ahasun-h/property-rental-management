<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\UserAdPost;
use Faker\Generator as Faker;


    $factory->define(UserAdPost::class, function (Faker $faker) {
        return [
            'address' => $faker->address,
            'apartment_no' => $faker->streetAddress,
            'rent_date' => $faker->date($format = '1979-06-09', $max = 'now'),
            'tenant' => $faker->name,
            'description' => $faker->text($maxNbChars = 200),
            'space_size' => $faker->latitude($min = -90, $max = 90),
            'renters' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'utility' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'category' => $faker->state,
            'floor' => $faker->state,
            'bedroom' => $faker->randomDigit,
            'bathroom' => $faker->randomDigit,
            'balconi' => $faker->randomDigit,
            'kitchen' => $faker->randomDigit,
            'dining_room' => $faker->randomDigit,
            'drawing_room' => $faker->randomDigit,
            'garage' => $faker->randomDigit,
            'closing_time' => $faker->date($format = '1979-06-09', $max = 'now'),
            'opening_time' => $faker->date($format = '1979-06-09', $max = 'now'),
            'nearest_famous_place_one' => $faker->state,
            'nearest_famous_place_two' => $faker->state,
            'featured_image' => $faker->imageUrl($width = 640, $height = 480),
            'more_image' => $faker->imageUrl($width = 640, $height = 480),
            'user_id' => $faker->randomDigit,
            'mobile' => $faker->e164PhoneNumber,
            'status' => $faker->boolean,
           
        ];
    });
    

