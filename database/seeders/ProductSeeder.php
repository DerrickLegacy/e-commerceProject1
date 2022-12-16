<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['name'=>'Samsung Tv ',
            'price'=>'$400',
            'category'=>'Electronics',
            'description'=>'Ultra HD curved screen',
            'gallery'=>'https://www.dvdoverseas.com/resize/Shared/Images/Product/Samsung-UA55KU7350-55-Curved-1080p-SMART-WiFi-PAL-NTSC-LED-TV/LC-S55U7350C-800x800.jpg?bw=500&bh=500',
            ],
            ['name'=>'Samsung Foldable Phone ',
            'price'=>'$650',
            'category'=>'Electronics',
            'description'=>'Long lasting battery with smooth screen',
            'gallery'=>'https://dekhnews.com/wp-content/uploads/2019/10/Samsung-Foldable-Smartphone-Design-Pics.jpg'
            ],
            ['name'=>'Anti theft Oxford smart bag',
            'price'=>'$20',
            'category'=>'Fashionware',
            'description'=>'Hard cover with multi functions such as headphone grommet, usb charge',
            'gallery'=>'https://th.bing.com/th/id/OIP.XHWy0E4WbuiNcB_K4su1egHaHa?w=191&h=191&c=7&r=0&o=5&pid=1.7'
             ]
        ]);
    }
}
