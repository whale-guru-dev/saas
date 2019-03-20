<?php

use Illuminate\Database\Seeder;

class FaqCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq_categories')->delete();
        
        \DB::table('faq_categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Frequent Questions',
                'language' => 'en',
                'created_at' => '2018-09-19 12:17:00',
                'updated_at' => '2018-09-19 12:19:48',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Common Issues',
                'language' => 'en',
                'created_at' => '2018-09-19 12:18:00',
                'updated_at' => '2018-09-19 12:19:37',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'General / Getting Started',
                'language' => 'en',
                'created_at' => '2018-09-19 12:18:00',
                'updated_at' => '2018-09-19 12:19:15',
            ),
        ));
        
        
    }
}