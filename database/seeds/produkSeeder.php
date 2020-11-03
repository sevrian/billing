<?php

use App\Model\Produk;
use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Produk::class, 10000)->create();
    }
}
