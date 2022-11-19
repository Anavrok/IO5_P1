<?php

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

        //users
        DB::table('users')->insert([ 
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'birth_date' => Carbon::create('2000', '01', '01'),
            'account_balance' => 0,
            'role' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([ 
            'name' => 'user',
            'email' => 'user@gmail.com',
            'birth_date' => Carbon::create('2001', '02', '11'),
            'account_balance' => 0,
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([ 
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'birth_date' => Carbon::create('1999', '07', '13'),
            'account_balance' => 100,
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([ 
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'birth_date' => Carbon::create('1996', '12', '27'),
            'account_balance' => 500,
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //games
        DB::table('games')->insert([
            'title' => 'Counter Strike: Global Offensive',
            'genre' => 'Strzelanka wieloosobowa',
            'value' => 29,
            'release_date' => Carbon::create('2012', '08', '12'),
            'image' => 'csgo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Grand Theft Auto V',
            'genre' => 'Gra akcji',
            'value' => 119,
            'release_date' => Carbon::create('2013', '09', '17'),
            'image' => 'gtav',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'FIFA 23',
            'genre' => 'Gra sportowa',
            'value' => 199,
            'release_date' => Carbon::create('2022', '09', '26'),
            'image' => 'fifa23',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Cyberpunk 2077',
            'genre' => 'Fabularna gra akcji',
            'value' => 199,
            'release_date' => Carbon::create('2077', '02', '15'),
            'image' => 'cyberpunk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Dying Light 2',
            'genre' => 'Survival horror',
            'value' => 159,
            'release_date' => Carbon::create('2022', '02', '04'),
            'image' => 'dl2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Need for Speed Heat',
            'genre' => 'Gra wyścigowa',
            'value' => 159,
            'release_date' => Carbon::create('2019', '11', '08'),
            'image' => 'nfsh',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Apex Legends',
            'genre' => 'Strzelanka wieloosobowa',
            'value' => 0,
            'release_date' => Carbon::create('2019', '02', '04'),
            'image' => 'apex',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Rust',
            'genre' => 'Survival',
            'value' => 149,
            'release_date' => Carbon::create('2018', '02', '08'),
            'image' => 'rust',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'New World',
            'genre' => 'MMO',
            'value' => 139,
            'release_date' => Carbon::create('2021', '09', '28'),
            'image' => 'nw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Football manager 2023',
            'genre' => 'Menedźer piłkarski',
            'value' => 199,
            'release_date' => Carbon::create('2022', '11', '08'),
            'image' => 'fm23',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Red Dead Redemption 2',
            'genre' => 'Przygodowa gra akcji',
            'value' => 199,
            'release_date' => Carbon::create('2018', '10', '26'),
            'image' => 'rdr2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'The Forest',
            'genre' => 'Survival horror',
            'value' => 49,
            'release_date' => Carbon::create('2018', '04', '30'),
            'image' => 'tf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Phasmophobia',
            'genre' => 'Survival horror',
            'value' => 49,
            'release_date' => Carbon::create('2020', '09', '18'),
            'image' => 'phasmo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'God of War',
            'genre' => 'Przygodowa gra akcji',
            'value' => 199,
            'release_date' => Carbon::create('2018', '04', '20'),
            'image' => 'gow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Euro Truck Simulator 2',
            'genre' => 'Gra symulacyjna',
            'value' => 19,
            'release_date' => Carbon::create('2012', '10', '19'),
            'image' => 'ets2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('games')->insert([
            'title' => 'Wiedźmin 3: Dziki Gon',
            'genre' => 'Fabularna gra akcji',
            'value' => 99,
            'release_date' => Carbon::create('2015', '05', '18'),
            'image' => 'w3dg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //game_users
        DB::table('game_users')->insert([
            'game_id' => '1',
            'user_id' => '2',
        ]);

        DB::table('game_users')->insert([
            'game_id' => '2',
            'user_id' => '2',
        ]);

        DB::table('game_users')->insert([
            'game_id' => '5',
            'user_id' => '2',
        ]);

        DB::table('game_users')->insert([
            'game_id' => '8',
            'user_id' => '2',
        ]);

        DB::table('game_users')->insert([
            'game_id' => '2',
            'user_id' => '3',
        ]);
    }
}
