<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        DB::table('orders')->insert([
            ['name' => 'PS4 JB', 'stocks' => 15],
            ['name' => 'PS5 Disc', 'stocks' => 12],
            ['name' => 'Samsung Galaxy A15', 'stocks' => 10],
            ['name' => 'Iphone 13 pro max', 'stocks' => 22],
            ['name' => 'Acer laptop', 'stocks' => 17],
            ['name' => 'Lenovo eyser', 'stocks' => 19],
            ['name' => 'Cherry Lobat', 'stocks' => 20],
            ['name' => 'ViePlus Monitor', 'stocks' => 5],
            ['name' => 'Especter pro Monitor', 'stocks' => 58],
            ['name' => 'Windows 11 pro key', 'stocks' => 55],
            ['name' => 'Honda beat FI', 'stocks' => 10],
        ]);  
    }
}
