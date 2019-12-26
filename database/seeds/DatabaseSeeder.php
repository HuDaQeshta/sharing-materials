<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // so every time the db:seed runs anything here will be called
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
