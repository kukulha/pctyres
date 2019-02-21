<?php

use Illuminate\Database\Seeder;
use App\Tire;

class TiresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tire::class, 25)->create();
    }
}
