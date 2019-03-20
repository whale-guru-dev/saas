<?php

use Illuminate\Database\Seeder;

class CaseStudiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('case_studies')->delete();
        
        \DB::table('case_studies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => '<p><strong>Parking Spot - </strong>Chicago biggest Parking Company uses CRM to communicate with customers.</p>',
                'main_image' => 'case-studies/September2018/GddWpyfT7oyo3bpEJOD1.jpeg',
                'orderby' => 1,
                'goto' => 'https://multicrm.laravel-bap.com',
                'language' => 'en',
                'created_at' => '2018-09-19 11:51:00',
                'updated_at' => '2018-09-19 12:00:46',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => '<p><strong>9 Phones</strong> - Leading telecommunication company uses ^MultiCRM to gain new customers.</p>',
                'main_image' => 'case-studies/September2018/5zoBuynnQoqRmcV14Zm8.jpg',
                'orderby' => 2,
                'goto' => 'https://codecanyon.net/item/multicrm-multicompany-laravel-crm/22196657',
                'language' => 'en',
                'created_at' => '2018-09-19 11:58:14',
                'updated_at' => '2018-09-19 11:58:14',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => '<p><strong>Solaris KNF</strong>&nbsp;- Leading alternative energy company in Europe uses MultiCRM for sales partners.</p>',
                'main_image' => 'case-studies/September2018/xrN36Gp8egWDbfgVsa8P.jpeg',
                'orderby' => 3,
                'goto' => 'https://codecanyon.net/item/multicrm-multicompany-laravel-crm/22196657',
                'language' => 'en',
                'created_at' => '2018-09-19 12:03:00',
                'updated_at' => '2018-09-19 12:04:37',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => '<p><strong>Peaceful retirement</strong> - Leading financial planning company uses MultiCRM for sales branches.&nbsp;</p>',
                'main_image' => 'case-studies/September2018/fYmpLXxEISszfV0jExv3.jpeg',
                'orderby' => 4,
                'goto' => 'https://codecanyon.net/item/multicrm-multicompany-laravel-crm/22196657',
                'language' => 'en',
                'created_at' => '2018-09-19 12:06:00',
                'updated_at' => '2018-09-19 12:06:33',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => '<p><strong>Bob Transportation</strong> - Wow! Yeah, that\'s the Bob! We got him! Out CRM Helps him a lot.</p>',
                'main_image' => 'case-studies/September2018/VUAr94G17PYZEQlprjbZ.jpeg',
                'orderby' => 5,
                'goto' => 'https://codecanyon.net/item/multicrm-multicompany-laravel-crm/22196657',
                'language' => 'en',
                'created_at' => '2018-09-19 12:08:00',
                'updated_at' => '2018-09-19 12:08:45',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => '<p><strong>East Flight</strong> - Leading transportation&nbsp;in the middle east uses MultiCRM! And that\'s&nbsp;the last fake!</p>',
                'main_image' => 'case-studies/September2018/55D3dUJK5Z9smNqqhzWq.jpeg',
                'orderby' => 6,
                'goto' => 'https://codecanyon.net/item/multicrm-multicompany-laravel-crm/22196657',
                'language' => 'en',
                'created_at' => '2018-09-19 12:10:00',
                'updated_at' => '2018-09-19 12:11:13',
            ),
        ));
        
        
    }
}