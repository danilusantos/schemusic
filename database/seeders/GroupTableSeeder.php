<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Permission;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group = Group::create([
            'id' => 1,
            'name' => 'Administrator',
            'description' => 'Grupo para usuários administradores, com acesso à todo o sistema.',
            'key' => 'ADMINISTRATOR',
            'status' => true
        ]);

        $group->assignPermission('admin');


        $group = Group::create([
            'id' => 2,
            'name' => 'Member',
            'description' => 'Grupo para usuários cadastrados no sistema e com plano ativo / acesso somente a área de membros.',
            'key' => 'MEMBER',
            'status' => false
        ]);

        $group->assignPermission('member');

        $group = Group::create([
            'id' => 3,
            'name' => 'Guest',
            'description' => 'Grupo para usuários cadastrados no sistema e sem plano ativo. / acesso somente ao gerenciamento do próprio usuário e área de pagamentos.',
            'key' => 'GUEST',
            'status' => false
        ]);

        $group->assignPermission('guest');
    }
}
