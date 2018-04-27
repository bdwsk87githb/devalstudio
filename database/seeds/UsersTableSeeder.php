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
        DB::table('users')->insert(['name' => 'deval', 'email' => 'devalstudio87@gmail.com', 'password' => '$2y$10$YTJiU61I/3W8xNV5YwWi9.tSslCV7PSqfmjn3sRYWD.C2YbVS7I0O', 'remember_token' => '3A2w3jzQQlTl8p3SA25chnth3excf15ilBkDGYhuOEN5KXeBbArvaU4ToAmf']);
    }
}
