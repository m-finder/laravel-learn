<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new User();
        $db->name = 'wu';
        $db->email = 'yf-wu@qq.com';
        $db->email_verified_at = \Carbon\Carbon::now();
        $db->password = Hash::make('111111');
        $db->save();
    }
}
