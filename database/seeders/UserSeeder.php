<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // factory(App\User::class, 3)->create();

        /* Seeder do curso, sei lá
        $connection = 'sqlite';
        $users = factory(App\User::class, 3)->make();
        $users->each(function($model) use($connection) {
            $model->setConnection($connection);
            $model->save();
        });
        */
    }
}
