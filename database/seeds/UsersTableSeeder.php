<?php

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
        //


        $user = new \App\User();
            $user->type='admin';
            $user->name = 'Admin User';
            $user->email = 'admin@admin.com';
            $user->password = \Illuminate\Support\Facades\Hash::make('testpass123');

        $user->save();


        echo 'user added !!';
    }
}
