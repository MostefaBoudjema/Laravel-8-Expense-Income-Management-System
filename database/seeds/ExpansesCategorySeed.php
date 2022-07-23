<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpansesCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'food', 'created_by_id' => '1'],
            ['id' => 2, 'name' => 'transport', 'created_by_id' => '1'],
            ['id' => 3, 'name' => 'needs', 'created_by_id' => '2'],
            ['id' => 4, 'name' => 'rent', 'created_by_id' => '2'],
            ['id' => 5, 'name' => 'food', 'created_by_id' => '2'],
            ['id' => 6, 'name' => 'transport', 'created_by_id' => '2'],
            ['id' => 7, 'name' => 'needs', 'created_by_id' => '1'],
            ['id' => 8, 'name' => 'rent', 'created_by_id' => '1'],

        ];

        foreach ($items as $item) {
            \App\ExpenseCategory::create($item);
        }
    }
}
