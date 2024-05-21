<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'group_id' => 1,
            'name' => 'Danilo Santos',
            'email' => 'danilondosantos@gmail.com',
            'password' => bcrypt('danilo123'),
        ]);
        $user->group->assignPermission('admin');

        $user = User::create([
            'group_id' => 2,
            'name' => 'Guilherme Correia',
            'email' => 'guilhermecorreia@gmail.com',
            'password' => bcrypt('guilherme123'),
        ]);
        $user->group->assignPermission('member');

    }
}
