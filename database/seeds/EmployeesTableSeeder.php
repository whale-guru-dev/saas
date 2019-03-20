<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'full_name' => 'John Doe',
                'role' => 'CEO',
                'image' => 'employees/September2018/C6X59idNZW8c39O2OSXZ.jpg',
                'twitter_url' => 'https://twitter.com/laravel_bap',
                'facebook' => 'https://www.facebook.com/laravelbap/',
                'language' => 'en',
                'orderby' => 1,
                'created_at' => '2018-09-16 17:55:00',
                'updated_at' => '2018-09-16 17:56:33',
            ),
            1 => 
            array (
                'id' => 2,
                'full_name' => 'Jane Deo',
                'role' => 'CFO',
                'image' => 'employees/September2018/ltR01ihLAJEwclpdzSF7.jpg',
                'twitter_url' => 'https://www.facebook.com/laravelbap/',
                'facebook' => 'https://twitter.com/laravel_bap',
                'language' => 'en',
                'orderby' => 2,
                'created_at' => '2018-09-16 17:57:32',
                'updated_at' => '2018-09-16 17:57:32',
            ),
            2 => 
            array (
                'id' => 3,
                'full_name' => 'Mary Jane',
                'role' => 'Graphic Designer',
                'image' => 'employees/September2018/j4uIiPvMtglocjKj7Nxu.jpg',
                'twitter_url' => 'https://twitter.com/laravel_bap',
                'facebook' => 'https://www.facebook.com/laravelbap/',
                'language' => 'en',
                'orderby' => 3,
                'created_at' => '2018-09-16 17:59:16',
                'updated_at' => '2018-09-16 17:59:16',
            ),
            3 => 
            array (
                'id' => 4,
                'full_name' => 'Greg Young',
                'role' => 'Developer',
                'image' => 'employees/September2018/7rtc58xewjLJmyiR4eRY.jpg',
                'twitter_url' => 'https://twitter.com/laravel_bap',
                'facebook' => 'https://www.facebook.com/laravelbap/',
                'language' => 'en',
                'orderby' => 4,
                'created_at' => '2018-09-16 18:00:06',
                'updated_at' => '2018-09-16 18:00:06',
            ),
        ));
        
        
    }
}