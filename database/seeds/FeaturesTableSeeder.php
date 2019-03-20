<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'heading' => 'CALENDAR',
                'icon' => 'fa fa-calendar fa-features',
                'orderby' => 1,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Personal calendar with the option to share. Public calendars for meeting rooms, resource reservations.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:44:10',
                'updated_at' => '2018-09-19 11:44:10',
            ),
            1 => 
            array (
                'id' => 2,
                'heading' => 'Campaigns',
                'icon' => 'fa fa-bar-chart-o fa-features',
                'orderby' => 2,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Create, track and optimize marketing activity.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:44:38',
                'updated_at' => '2018-09-19 11:44:38',
            ),
            2 => 
            array (
                'id' => 3,
                'heading' => 'Leads',
                'icon' => 'fa fa-search fa-features',
                'orderby' => 3,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Prospect who might be interested in your products. You may collect leads from events, web forms etc.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:45:28',
                'updated_at' => '2018-09-19 11:45:28',
            ),
            3 => 
            array (
                'id' => 4,
                'heading' => 'Contacts',
                'icon' => 'fa fa-vcard-o fa-features',
                'orderby' => 4,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Record information about your customers. The person can be individual or linked with the company.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:46:10',
                'updated_at' => '2018-09-19 11:46:10',
            ),
            4 => 
            array (
                'id' => 5,
                'heading' => 'Accounts',
                'icon' => 'fa fa-building-o fa-features',
                'orderby' => 5,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Account records is an organization customer. The record can be connected with almost every module.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:46:29',
                'updated_at' => '2018-09-19 11:46:29',
            ),
            5 => 
            array (
                'id' => 6,
                'heading' => 'Deals',
                'icon' => 'fa fa-money fa-features',
                'orderby' => 5,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Deals are potential sales and opportunities. You can collect them and work with them to change to real revenue.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:46:00',
                'updated_at' => '2018-09-19 11:47:53',
            ),
            6 => 
            array (
                'id' => 7,
                'heading' => 'Quotes',
                'icon' => 'fa fa-calculator fa-features',
                'orderby' => 7,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Contains the detailed list of Products and Services.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:47:41',
                'updated_at' => '2018-09-19 11:47:41',
            ),
            7 => 
            array (
                'id' => 8,
                'heading' => 'Invoices',
                'icon' => 'fa fa-folder-open fa-features',
                'orderby' => 8,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Register of invoices in one place. information about the statuses, products and services you provide.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:49:31',
                'updated_at' => '2018-09-19 11:49:31',
            ),
            8 => 
            array (
                'id' => 9,
                'heading' => 'Tickets',
                'icon' => 'fa fa-exclamation-triangle fa-features',
                'orderby' => 9,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Tickets are any kind of customer service requests. Module helps to collect requests, inquiries and problems.</span></p>',
                'language' => 'en',
                'created_at' => '2018-09-19 11:50:01',
                'updated_at' => '2018-09-19 11:50:01',
            ),
        ));
        
        
    }
}