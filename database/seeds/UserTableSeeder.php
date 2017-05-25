<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$lRUg10qMkf8ZfP4ByvpBEOiWRZmpeEZNwH3f0K4gjqeoJPuR1dnHy',
                'remember_token' => 'HJZQIrXMvlETh3G4hPMvhOgWV1IVoWItRD8a1jBjFNw7cErFLKwp6P6rMwn0',
                'created_at' => '2017-05-12 15:16:16',
                'updated_at' => '2017-05-12 15:16:16',
            ),
        ));

    }
}
