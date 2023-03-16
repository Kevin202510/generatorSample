<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
              'id'   => 1, 
              'display_name'  => 'Developer',
            ],
            [
              'id'   => 2,
              'display_name' => 'Administrator',
            ],
            [
              'id'   => 3,
              'display_name' => 'Registrar Staff',
            ],
            [
              'id'   => 4,
              'display_name' => 'CLRC Staff',
            ],
            [
              'id'   => 5,
              'display_name' => 'Library Staff',
            ]
        ]);
    }
}
