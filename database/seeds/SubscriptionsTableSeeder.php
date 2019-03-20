<?php

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscriptions')->delete();
        
        \DB::table('subscriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'name' => 'main',
                'stripe_id' => 'sub_Ddj3jGnKmstgv9',
                'stripe_plan' => 'plan_DSSXjsc0Msmy6a',
                'quantity' => 1,
                'trial_ends_at' => NULL,
                'ends_at' => NULL,
                'created_at' => '2018-09-20 12:49:34',
                'updated_at' => '2018-09-20 12:49:34',
            ),
        ));
        
        
    }
}