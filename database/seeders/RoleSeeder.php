<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'title' => "Повар",
            'description' => "При жарке мяса не используйте вилки - они прокалывают его и вытаскивают соки. Вместо этого используйте щипцы."
        ]);
        DB::table('roles')->insert([
            'description' => "При жарке мяса не используйте вилки - они прокалывают его и вытаскивают соки. Вместо этого используйте щипцы."
        ]);
        DB::table('roles')->insert([
            'description' => "Добавьте овсяные хлопья в тесто для панкейков, чтобы сделать его более питательным."
        ]);
    }
}
