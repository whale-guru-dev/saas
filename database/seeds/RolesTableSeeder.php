<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2018-09-16 16:11:09',
                'updated_at' => '2018-09-16 16:11:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'demo_admin',
                'display_name' => 'Demo Admin',
                'created_at' => '2018-09-19 18:55:20',
                'updated_at' => '2018-09-19 18:55:20',
            ),
        ));
        
        
    }
}