<?php

namespace Database\Seeders;
use Carbon\Carbon;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@gmail.com',
            'birth_date' => Carbon::parse('2000-01-01'),
            'account_balance' => 0,
            'role' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('AdminAdmin'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'surname' => 'user',
            'email' => 'user@gmail.com',
            'birth_date' => Carbon::parse('2000-01-01'),
            'account_balance' => 0,
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('UserUser'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);*/
    }
}
