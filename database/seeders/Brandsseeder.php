<?php

namespace Database\Seeders;

use App\Models\BrandsModel;
use Illuminate\Database\Seeder;

class Brandsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       BrandsModel::factory()->count(1000)->create();
    }
}
