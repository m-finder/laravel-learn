<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-08-23 09:35:35',
                'updated_at' => '2019-08-23 09:35:35',
            ),
        ));
        
        
    }
}