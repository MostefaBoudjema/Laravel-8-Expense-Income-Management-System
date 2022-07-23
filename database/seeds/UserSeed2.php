<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Mostfa', 'email' => 'myreal17@gmail.com', 'password' => '$2y$10$S3BFMasU70le0CcgBtFp4OjGwV94m6TsIXXsO7GAvaJ9Wg7xj0c7i', 'role_id' => 1, 'remember_token' => '', 'currency_id' => 1],
            ['id' => 2, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$msflsjAZ7jGwsJBZ18Uthu.C8DWDzxdRGhuwQpFUgreL4MPPxU0zq', 'role_id' => 1, 'remember_token' => '', 'currency_id' => 1],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
