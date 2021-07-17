<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Samsung Mobile',
            'price'=>'300',
            'category'=>'Mobile',
            'description'=>'Samsung Mobile with 4gb ram',
            
            'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-m31-sm-m315f-1.jpg',


        ]);
    }
}
