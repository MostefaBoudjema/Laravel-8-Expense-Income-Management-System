<?php

use Database\Seeders\ExpansesCategorySeed;
use Database\Seeders\IncomeCategorySeed;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(CurrencySeed::class);
        $this->call(IncomeCategorySeed::class);
        $this->call(ExpansesCategorySeed::class);
    }
}
