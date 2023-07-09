<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
    // DB::table('house')->insert([
    //     'name'=> Str::random(10),
    //     'designation'=> Str::random(10),
    //     'office'=> Str::random(10),
    //     'dob'=> Carbon::createFromDate(2000,01,01)->toDateTimeString(),
    //     'prl_date'=> Carbon::createFromDate(2000,01,01)->toDateTimeString(),
    //     'house_no_name'=> Str::random(10),
    //     'reference_no'=> Str::random(10),
    //     'comment'=> Str::random(10),
    // ]);

    }
}
