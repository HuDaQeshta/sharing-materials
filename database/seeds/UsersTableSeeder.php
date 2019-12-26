<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin1 = User::create([
            'username' => 'Huda',
            'password' => Hash::make('Huda12345')
        ]);

        $user1 = User::create([
            'username' => 'user',
            'password' => Hash::make('user12345')
        ]);
        //attach method attahes anything inside the parameters to the user or admin (variable) 
        $admin1->role()->attach($adminRole);
        $user1->role()->attach($userRole);
    }
}
