<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CaseStudiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);

        $this->call(EmployeesTableSeeder::class);
        $this->call(FaqCategoriesTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(JobsTableSeeder::class);

        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);

        $this->call(RolesTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);

        $this->call(PlansTableSeeder::class);

        $this->call(SubscriptionsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);

        $this->call(SettingsTableSeeder::class);
    }
}
