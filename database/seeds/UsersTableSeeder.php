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
                'remember_token' => 'X2ZKQfIXdMJc24fzzurX8aP5FHs8dc0YRbn4P4qvav5zPZtRrke3bZtJVjil',
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
                'password' => '$2y$10$r988HWnRBK2WoDs5X60eXeAEUCB/9AeRfit7.xmhE0Q.qFQYPbLOi',
                'remember_token' => 'VguKXi78INBQwBcwoCh86gbonRgO4ceJXAe5QOqtdCm5IATNjFFDhgTRc0Gk',
                'created_at' => '2017-05-12 15:20:11',
                'updated_at' => '2017-05-12 19:34:57',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'User',
                'email' => 'user@user.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$cRBnH/r3H.aFud90Mn/kHuV2.puNO4/P22wL4yp10l3y1bm4ILgcG',
                'remember_token' => 'ddGvwrdUVFc0wOcubPKIBkP0rLPwSh9YDlyZVdgJ1p3aGt1jGYE6yU7l0b27',
                'created_at' => '2017-05-12 15:22:22',
                'updated_at' => '2017-05-12 19:36:01',
            ),
        ));
        
        
    }
}