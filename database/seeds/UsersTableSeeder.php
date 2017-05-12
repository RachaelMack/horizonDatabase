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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$lRUg10qMkf8ZfP4ByvpBEOiWRZmpeEZNwH3f0K4gjqeoJPuR1dnHy',
                'remember_token' => 'HJZQIrXMvlETh3G4hPMvhOgWV1IVoWItRD8a1jBjFNw7cErFLKwp6P6rMwn0',
                'created_at' => '2017-05-12 15:16:16',
                'updated_at' => '2017-05-12 15:16:16',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Manager',
                'email' => 'manager@manager.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$I6WlJaaHYZaZiKNvv5f7P.FpyXbGkKIUxbjFa5W51GKolLxZzGn/2',
                'remember_token' => 'SQtByOBJcxZpLxbrKKLhHFrzaH912TiCaprmyW1AcR61pDCllRjl3QAPErNt',
                'created_at' => '2017-05-12 15:20:11',
                'updated_at' => '2017-05-12 20:01:31',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'User',
                'email' => 'user@user.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$cRBnH/r3H.aFud90Mn/kHuV2.puNO4/P22wL4yp10l3y1bm4ILgcG',
                'remember_token' => 'TpP0J9j83qRW1srCqc8wtiBcWzp1TmCazURPL66CXynFX0yS2ubuS0u3mlb5',
                'created_at' => '2017-05-12 15:22:22',
                'updated_at' => '2017-05-12 19:36:01',
            ),
        ));
        
        
    }
}