<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	array(
        		"name" => "Ahsan Habib",
        		"email" => "ahsanhabib@gmail.com",
        		"mobile" => "01815752377",
        		"password" => Hash::make("123456789")
        	)
        );

        Admin::insert($data);
    }
}
