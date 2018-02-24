<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@admin.com',
            'password' => bcrypt('admin123')
        ]);

        factory(App\User::class, 5)->create();
    }
}
