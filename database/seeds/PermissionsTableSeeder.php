<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-09-16 16:12:25',
                'updated_at' => '2018-09-16 16:12:25',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_case_studies',
                'table_name' => 'case_studies',
                'created_at' => '2018-09-16 16:21:54',
                'updated_at' => '2018-09-16 16:21:54',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_case_studies',
                'table_name' => 'case_studies',
                'created_at' => '2018-09-16 16:21:54',
                'updated_at' => '2018-09-16 16:21:54',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_case_studies',
                'table_name' => 'case_studies',
                'created_at' => '2018-09-16 16:21:54',
                'updated_at' => '2018-09-16 16:21:54',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_case_studies',
                'table_name' => 'case_studies',
                'created_at' => '2018-09-16 16:21:54',
                'updated_at' => '2018-09-16 16:21:54',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_case_studies',
                'table_name' => 'case_studies',
                'created_at' => '2018-09-16 16:21:54',
                'updated_at' => '2018-09-16 16:21:54',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_employees',
                'table_name' => 'employees',
                'created_at' => '2018-09-16 17:16:37',
                'updated_at' => '2018-09-16 17:16:37',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_employees',
                'table_name' => 'employees',
                'created_at' => '2018-09-16 17:16:37',
                'updated_at' => '2018-09-16 17:16:37',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_employees',
                'table_name' => 'employees',
                'created_at' => '2018-09-16 17:16:37',
                'updated_at' => '2018-09-16 17:16:37',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_employees',
                'table_name' => 'employees',
                'created_at' => '2018-09-16 17:16:37',
                'updated_at' => '2018-09-16 17:16:37',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_employees',
                'table_name' => 'employees',
                'created_at' => '2018-09-16 17:16:37',
                'updated_at' => '2018-09-16 17:16:37',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2018-09-16 17:17:06',
                'updated_at' => '2018-09-16 17:17:06',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2018-09-16 17:17:06',
                'updated_at' => '2018-09-16 17:17:06',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2018-09-16 17:17:06',
                'updated_at' => '2018-09-16 17:17:06',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2018-09-16 17:17:06',
                'updated_at' => '2018-09-16 17:17:06',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2018-09-16 17:17:06',
                'updated_at' => '2018-09-16 17:17:06',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'created_at' => '2018-09-16 17:17:37',
                'updated_at' => '2018-09-16 17:17:37',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'created_at' => '2018-09-16 17:17:37',
                'updated_at' => '2018-09-16 17:17:37',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'created_at' => '2018-09-16 17:17:37',
                'updated_at' => '2018-09-16 17:17:37',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'created_at' => '2018-09-16 17:17:37',
                'updated_at' => '2018-09-16 17:17:37',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'created_at' => '2018-09-16 17:17:37',
                'updated_at' => '2018-09-16 17:17:37',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_features',
                'table_name' => 'features',
                'created_at' => '2018-09-16 17:19:00',
                'updated_at' => '2018-09-16 17:19:00',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_features',
                'table_name' => 'features',
                'created_at' => '2018-09-16 17:19:00',
                'updated_at' => '2018-09-16 17:19:00',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_features',
                'table_name' => 'features',
                'created_at' => '2018-09-16 17:19:00',
                'updated_at' => '2018-09-16 17:19:00',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_features',
                'table_name' => 'features',
                'created_at' => '2018-09-16 17:19:00',
                'updated_at' => '2018-09-16 17:19:00',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_features',
                'table_name' => 'features',
                'created_at' => '2018-09-16 17:19:00',
                'updated_at' => '2018-09-16 17:19:00',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_jobs',
                'table_name' => 'jobs',
                'created_at' => '2018-09-16 17:19:28',
                'updated_at' => '2018-09-16 17:19:28',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_jobs',
                'table_name' => 'jobs',
                'created_at' => '2018-09-16 17:19:28',
                'updated_at' => '2018-09-16 17:19:28',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_jobs',
                'table_name' => 'jobs',
                'created_at' => '2018-09-16 17:19:28',
                'updated_at' => '2018-09-16 17:19:28',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_jobs',
                'table_name' => 'jobs',
                'created_at' => '2018-09-16 17:19:28',
                'updated_at' => '2018-09-16 17:19:28',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_jobs',
                'table_name' => 'jobs',
                'created_at' => '2018-09-16 17:19:28',
                'updated_at' => '2018-09-16 17:19:28',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_plans',
                'table_name' => 'plans',
                'created_at' => '2018-09-16 17:20:12',
                'updated_at' => '2018-09-16 17:20:12',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_plans',
                'table_name' => 'plans',
                'created_at' => '2018-09-16 17:20:12',
                'updated_at' => '2018-09-16 17:20:12',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_plans',
                'table_name' => 'plans',
                'created_at' => '2018-09-16 17:20:12',
                'updated_at' => '2018-09-16 17:20:12',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_plans',
                'table_name' => 'plans',
                'created_at' => '2018-09-16 17:20:12',
                'updated_at' => '2018-09-16 17:20:12',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_plans',
                'table_name' => 'plans',
                'created_at' => '2018-09-16 17:20:12',
                'updated_at' => '2018-09-16 17:20:12',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2018-09-16 17:21:16',
                'updated_at' => '2018-09-16 17:21:16',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2018-09-16 17:21:16',
                'updated_at' => '2018-09-16 17:21:16',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2018-09-16 17:21:16',
                'updated_at' => '2018-09-16 17:21:16',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2018-09-16 17:21:16',
                'updated_at' => '2018-09-16 17:21:16',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2018-09-16 17:21:16',
                'updated_at' => '2018-09-16 17:21:16',
            ),
        ));
        
        
    }
}