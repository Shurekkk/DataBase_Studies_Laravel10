<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        */


        User::factory(10)->create();

/*
        $connection = 'sqlite';
        $users = User::factory(10)->make();
        $users->each(function($model) use($connection) {
            $model->setConnection($connection);
            $model->save();
        });
        */



        /*
        User::factory()->create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => str::random(10),
        ]);
        */


        //
        // \App\Models\User::factory(10)->create();
//
  //       \App\Models\User::factory()->create([
    //         'name' => 'Test User',
      //       'email' => 'test@example.com',
        // ]);
    }
}
