<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.Ll9RjALeyDvWGFy/7q.dOYDCxgm/Xd0D.BNoFjB.zCUSa5eDdW5i',
                'remember_token' => NULL,
                'created_at' => '2023-10-08 16:24:32',
                'updated_at' => '2023-10-08 16:24:32',
            ),
        ));
    }
}
