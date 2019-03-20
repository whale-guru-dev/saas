<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{


    public function stripeSeed(){

        \DB::table('plans')->delete();

        \DB::table('plans')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Startup',
                    'slug' => 'startup',
                    'orderby' => 2,
                    'featured' => 0,
                    'description' => '',
                    'gateway_id' => 'plan_DSSWRgXqR7sOQ8',
                    'price' => '39.00',
                    'active' => 1,
                    'teams_limit' => 24,
                    'storage_limit' => 24,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'startup',
                    'trial' => false,
                    'trial_days' => NULL
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Standard',
                    'slug' => 'standard',
                    'orderby' => 3,
                    'featured' => 1,
                    'description' => '',
                    'gateway_id' => 'plan_DSSXjsc0Msmy6a',
                    'price' => '99.00',
                    'active' => 1,
                    'teams_limit' => 50,
                    'storage_limit' => 100,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'standard',
                    'trial' => false,
                    'trial_days' => NULL
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Premium',
                    'slug' => 'premium',
                    'orderby' => 4,
                    'featured' => 0,
                    'description' => '',
                    'gateway_id' => 'plan_DSSXL9SU1P20Sg',
                    'price' => '199.00',
                    'active' => 1,
                    'teams_limit' => NULL,
                    'storage_limit' => NULL,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'premium',
                    'trial' => false,
                    'trial_days' => null
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Trial',
                    'slug' => 'trial',
                    'orderby' => 1,
                    'featured' => 1,
                    'description' => '',
                    'gateway_id' => 'plan_EgJwvRcqzHqx8I',
                    'price' => '0.00',
                    'active' => 1,
                    'teams_limit' => 10,
                    'storage_limit' => 1,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'trial',
                    'trial' => true,
                    'trial_days' => 30
                ),
        ));

    }

    public function braintreeSeed(){

        \DB::table('plans')->delete();

        \DB::table('plans')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Startup',
                    'slug' => 'startup',
                    'orderby' => 1,
                    'featured' => 0,
                    'description' => '',
                    'gateway_id' => 'p2rb',
                    'price' => '39.00',
                    'active' => 1,
                    'teams_limit' => 24,
                    'storage_limit' => 24,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'startup',
                    'trial' => false,
                    'trial_days' => NULL
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Standard',
                    'slug' => 'standard',
                    'orderby' => 3,
                    'featured' => 0,
                    'description' => '',
                    'gateway_id' => '54sg',
                    'price' => '99.00',
                    'active' => 1,
                    'teams_limit' => 50,
                    'storage_limit' => 100,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'standard',
                    'trial' => false,
                    'trial_days' => NULL
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Premium',
                    'slug' => 'premium',
                    'orderby' => 2,
                    'featured' => 1,
                    'description' => '',
                    'gateway_id' => 'k35r',
                    'price' => '199.00',
                    'active' => 1,
                    'teams_limit' => NULL,
                    'storage_limit' => NULL,
                    'created_at' => '2018-09-16 16:10:54',
                    'updated_at' => NULL,
                    'api_plan' => 'premium',
                    'trial' => false,
                    'trial_days' => NULL
                ),
        ));

    }

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        if(config('saas.payment_gateway','') == 'stripe'){
            $this->stripeSeed();
        }else{
            $this->braintreeSeed();
        }

    }
}