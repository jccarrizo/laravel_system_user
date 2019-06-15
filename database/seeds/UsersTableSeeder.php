<?php

use Illuminate\Database\Seeder;
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
        
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Juan Carlos Carrizo';
        $user->email = 'jc_carrizo79@hotmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Test test';
        $user->email = 'test@test.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
