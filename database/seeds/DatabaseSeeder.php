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
        $this->call(OrganizationTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);

        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
