<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IncomeCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'wage', 'created_by_id' => '1'],
            ['id' => 2, 'name' => 'pod', 'created_by_id' => '1'],
            ['id' => 3, 'name' => 'freelance', 'created_by_id' => '2'],
            ['id' => 4, 'name' => 'passive', 'created_by_id' => '2'],
            ['id' => 5, 'name' => 'wage', 'created_by_id' => '2'],
            ['id' => 6, 'name' => 'pod', 'created_by_id' => '2'],
            ['id' => 7, 'name' => 'freelance', 'created_by_id' => '1'],
            ['id' => 8, 'name' => 'passive', 'created_by_id' => '1'],

        ];

        foreach ($items as $item) {
            \App\incomeCategory::create($item);
        }
    }
}
