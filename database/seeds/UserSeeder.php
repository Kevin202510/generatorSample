<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'user_role_id' => 1,
                'user_profile' => 'superadmin@gmail.com/profile.jpg',
                'user_fname' => 'kevin felix',
                'user_mname' => 'felix',
                'user_lname' => 'caluag',
                'DOB' => '2001-01-13',
                'address' => 'Bago General Tinio NE',
                'contact' => '09261364720',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => 'password',
            ],[
                'user_role_id' => 3,
                'user_profile' => 'superadmin@gmail.com/profile.jpg',
                'user_fname' => 'kevin felix',
                'user_mname' => 'felix',
                'user_lname' => 'caluag',
                'DOB' => '2001-01-13',
                'address' => 'Bago General Tinio NE',
                'contact' => '09261364720',
                'username' => 'superadmins',
                'email' => 'superadmins@gmail.com',
                'password' => 'password',
            ],
        ]);
    }
}
