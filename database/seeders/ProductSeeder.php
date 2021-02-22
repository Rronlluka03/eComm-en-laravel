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
        DB::table('products')->insert(/*[
            'name'=>'LG mobile',
            "price"=>"200",
            "description"=>"A smartphone with 8gb ram and much more features",
            "category"=>"Mobile",
            "gallery"=>"https://www.lg.com/us/images/cell-phones/md07000150/gallery/medium06.jpg",
        ],
        [
            'name'=>'OPPO',
            "price"=>"300",
            "description"=>"A smartphone with 4gb ram and much more features",
            "category"=>"Mobile",
            "gallery"=>"https://5.imimg.com/data5/CZ/RS/ZT/SELLER-100534408/oppo-mobile-phones-f15-500x500.jpg",
        ]
        [
            'name'=>'Panasonic TV',
            "price"=>"400",
            "description"=>"A smartv with much more features",
            "category"=>"tv",
            "gallery"=>"https://cnet3.cbsistatic.com/img/_0BnPKeBduKtV0OcliG7tzMW2sY=/470x376/2007/08/29/5132a686-cc2e-11e2-9a4a-0291187b029a/panasonic_th-42pz700_1.jpg",
        ],
        [
            'name'=>'Sony TV',
            "price"=>"500",
            "description"=>"A smartv with much more features",
            "category"=>"tv",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/91v4nFq0LuL._SL1500_.jpg",
        ],
        [
            'name'=>'LG Fridge',
            "price"=>"600",
            "description"=>"All teh feautures",
            "category"=>"fridge",
            "gallery"=>"https://www.mime.asia/wp-content/uploads/2020/11/RefrigeratorStorage.jpg",
        ],*/
        [
            'name'=>'OPPO',
            "price"=>"300",
            "description"=>"A smartphone with 4gb ram and much more features",
            "category"=>"Mobile",
            "gallery"=>"https://5.imimg.com/data5/CZ/RS/ZT/SELLER-100534408/oppo-mobile-phones-f15-500x500.jpg",
        ]
    );

    }
}
