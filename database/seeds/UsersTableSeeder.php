<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
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
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'saas@laravel-bap.com',
                'avatar' => 'users/September2018/HkxhQr3ESLHXCTCEGibY.png',
                'password' => '$2y$10$kMls5xAEkxNKCy6J/pXG9e5omHrxQywobWY3cZNaqXeb42hd16mIy',
                'application_id' => NULL,
                'remember_token' => 'xuA69jqONwX9XOCxehIoZoQOsKgYLEP1sVWtZyBZffJdct8mTgp144Kvtwc5',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-09-16 16:11:09',
                'updated_at' => '2018-09-19 19:06:23',
                'activated' => 0,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'deleted_at' => NULL,
                'provider' => NULL,
                'provider_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Albert',
                'email' => 'wesker@laravel-bap.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$I4Z7llMpohz0hJE5qfWb0uJjuO9NRE9ew7LsAs0nC85z3stUOFWhK',
                'application_id' => '2',
                'remember_token' => '4Ai7MnEyJq5WLTN0BJZwX536MGqLnXK1iTYUJqTxg2mVTjf2JXnrqv9BuscM',
                'settings' => NULL,
                'created_at' => '2018-09-19 13:45:27',
                'updated_at' => '2018-09-20 12:57:11',
                'activated' => 1,
                'stripe_id' => 'cus_DdN4eV3jCWcWrN',
                'card_brand' => 'Visa',
                'card_last_four' => '4242',
                'trial_ends_at' => NULL,
                'deleted_at' => NULL,
                'provider' => NULL,
                'provider_id' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Demo Admin',
                'email' => 'demo@laravel-bap.com',
                'avatar' => 'users/September2018/CFa4yxb3YfCX2FryUdGz.png',
                'password' => '$2y$10$r5vNAWfV7WDgwE4denYWGOi9dC6/jNSkt7Y9OVwsODuxUioqPJ1ku',
                'application_id' => NULL,
                'remember_token' => 'szr9aXigZ20JiTZWqIaBblC6U2qnx2TNCnMSliJHtN1vP8NRBb0OgZqAghMA',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-09-19 18:56:59',
                'updated_at' => '2018-09-19 18:56:59',
                'activated' => 0,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'deleted_at' => NULL,
                'provider' => NULL,
                'provider_id' => NULL,
            ),
        ));
        
        
    }
}