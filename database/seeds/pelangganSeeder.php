<?php

use App\Model\Pelanggan;
use Illuminate\Database\Seeder;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pelanggan::class,100)->create();
    }
}
