<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To prevent the seeder from running with the same data (empty the seeder)
        Role::truncate();

        //create() takes an array with key,value pairs, in which the key is the table's col and the value is the value of the col.
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);
        
    }
}
