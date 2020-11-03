<?php

use App\Model\Akun;
use Illuminate\Database\Seeder;

class akunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Akun::class, 100)->create();
    }
}
