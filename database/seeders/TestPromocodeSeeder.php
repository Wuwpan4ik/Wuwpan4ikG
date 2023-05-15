<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestPromocodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promocodes')->insert([
            'code' => "1234",
            'user_id' => Auth::id(),
            'count' => 1,
            'amount' => 50000
        ]);
    }
}
