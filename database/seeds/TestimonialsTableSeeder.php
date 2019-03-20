<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">It has made our sales department more effective and efficient. It\'s easy to use and it\'s constantly updated.</span></p>',
                'orderby' => 1,
                'author' => 'Jane Doe, NY',
                'language' => 'en',
                'created_at' => '2018-09-16 18:00:47',
                'updated_at' => '2018-09-16 18:00:47',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">A++ customer service. MultiCRM is built with a clean, modern structure &amp; design.</span></p>',
                'orderby' => 2,
                'author' => 'Jane Appleseed, Washington',
                'language' => 'en',
                'created_at' => '2018-09-16 18:01:01',
                'updated_at' => '2018-09-16 18:01:01',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Thanks so much for doing a great job!</span></p>',
                'orderby' => 3,
                'author' => 'Ed B, Chicago',
                'language' => 'en',
                'created_at' => '2018-09-16 18:01:19',
                'updated_at' => '2018-09-16 18:01:19',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Software is great and integrates with telematics solutions really well.</span></p>',
                'orderby' => 4,
                'author' => 'John, San Diego',
                'language' => 'en',
                'created_at' => '2018-09-16 18:01:32',
                'updated_at' => '2018-09-16 18:01:32',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">new light in an industry full of old school software.</span></p>',
                'orderby' => 5,
                'author' => 'Jane Smith, Phoenix',
                'language' => 'en',
                'created_at' => '2018-09-16 18:01:48',
                'updated_at' => '2018-09-16 18:01:48',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => '<p><span style="color: #525f7f; font-family: \'Open Sans\', sans-serif;">Boosted my sales +200%</span></p>',
                'orderby' => 6,
                'author' => 'Jack Johnson, Philadelphia',
                'language' => 'en',
                'created_at' => '2018-09-16 18:02:00',
                'updated_at' => '2018-09-16 18:02:00',
            ),
        ));
        
        
    }
}