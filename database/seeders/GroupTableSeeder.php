<?php

namespace Database\Seeders;

use App\Models\Group;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'name' => 'Administrator',
            'description' => 'Grupo para usuários administradores, com acesso à todo o sistema.',
            'key' => 'ADMINISTRATOR',
            'status' => true
        ]);

        Group::create([
            'name' => 'Member',
            'description' => 'Grupo para usuários cadastrados no sistema e com plano ativo / acesso somente a área de membros.',
            'key' => 'MEMBER',
            'status' => false
        ]);

        Group::create([
            'name' => 'Guest',
            'description' => 'Grupo para usuários cadastrados no sistema e sem plano ativo. / acesso somente ao gerenciamento do próprio usuário e área de pagamentos.',
            'key' => 'GUEST',
            'status' => false
        ]);
    }
}
