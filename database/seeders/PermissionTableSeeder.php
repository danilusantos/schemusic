<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' => 'admin',
            'description' => 'Permissão para acessar a área administrativa'
        ]);
        Permission::firstOrCreate([
            'name' => 'member',
            'description' => 'Permissão para o usuário com plano ativo acessar a área de membros'
        ]);
        Permission::firstOrCreate([
            'name' => 'guest',
            'description' => 'Permissão para o usuário sem plano ter acesso à área de membros limitada'
        ]);
    }
}
