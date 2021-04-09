<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            'name' => 'tra sua ba anh em',
            'category_id' => '1',
            'price' => '57000',
            'photo' => 'http://tocotocotea.com/wp-content/uploads/2021/01/1578305659051_tra_sua_3_anh_em_e5929a819d2c4b08a1ae2caafe921473_grande.jpg'
        ]);
    }
}
