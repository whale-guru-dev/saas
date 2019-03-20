<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-09-16 16:12:24',
                'updated_at' => '2018-09-16 16:12:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-09-16 16:12:24',
                'updated_at' => '2018-09-16 16:12:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-09-16 16:12:24',
                'updated_at' => '2018-09-16 16:12:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'case_studies',
                'slug' => 'case-studies',
                'display_name_singular' => 'Case Study',
                'display_name_plural' => 'Case Studies',
                'icon' => 'voyager-folder',
                'model_name' => 'App\\Models\\CaseStudy',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 16:21:54',
                'updated_at' => '2018-09-16 16:21:54',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'employees',
                'slug' => 'employees',
                'display_name_singular' => 'Employee',
                'display_name_plural' => 'Employees',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Employee',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:16:37',
                'updated_at' => '2018-09-19 12:13:04',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'faq_categories',
                'slug' => 'faq-categories',
                'display_name_singular' => 'Faq Category',
                'display_name_plural' => 'Faq Categories',
                'icon' => NULL,
                'model_name' => 'App\\Models\\FaqCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:17:06',
                'updated_at' => '2018-09-16 17:17:06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'faqs',
                'slug' => 'faqs',
                'display_name_singular' => 'Faq',
                'display_name_plural' => 'Faqs',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Faq',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:17:37',
                'updated_at' => '2018-09-16 17:17:37',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'features',
                'slug' => 'features',
                'display_name_singular' => 'Feature',
                'display_name_plural' => 'Features',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Feature',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:19:00',
                'updated_at' => '2018-09-16 17:19:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'jobs',
                'slug' => 'jobs',
                'display_name_singular' => 'Job',
                'display_name_plural' => 'Jobs',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Job',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:19:28',
                'updated_at' => '2018-09-16 17:19:28',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'plans',
                'slug' => 'plans',
                'display_name_singular' => 'Plan',
                'display_name_plural' => 'Plans',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Plan',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:20:12',
                'updated_at' => '2018-09-16 17:20:12',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'testimonials',
                'slug' => 'testimonials',
                'display_name_singular' => 'Testimonial',
                'display_name_plural' => 'Testimonials',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Testimontial',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-09-16 17:21:16',
                'updated_at' => '2018-09-16 17:21:16',
            ),
        ));
        
        
    }
}