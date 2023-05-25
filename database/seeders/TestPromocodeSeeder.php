<?php

namespace Database\Seeders;

use App\Models\Promocode;
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
        foreach (Promocode::all() as $promocode) {
            $promocode->delete();
        }
        DB::table('promocodes')->insert([
            'code' => "1232422",
            'user_id' => Auth::id(),
            'count' => 5,
            'amount' => 50000
        ]);

        DB::table('promocodes')->insert([
            'code' => "dotwoc123Completed",
            'user_id' => Auth::id(),
            'count' => 5000,
            'amount' => 10000,
            'partner_id' => 1
        ]);

        DB::table('promocodes')->insert([
            'code' => "dotwoc123dqwd1Completed",
            'user_id' => Auth::id(),
            'count' => 5000,
            'amount' => 1000000,
            'partner_id' => 2
        ]);
    }
}
