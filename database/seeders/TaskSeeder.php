<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'title' => 'Leer Clean Code',
                'description' => 'Empezar  a leer clean code.',
                'limit_date' => Carbon::now()->addDays(7)->toDateString(),
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aprender TypeScript',
                'description' => 'Aprender TypeScript para mejorar mis habilidades de programación.',
                'limit_date' => Carbon::now()->addDays(3)->toDateString(),
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aprender Redux',
                'description' => 'Aprender Redux.',
                'limit_date' => Carbon::now()->addDays(5)->toDateString(),
                'completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Comprar comida para el perro',
                'description' => 'Comprar comida para el perro.',
                'limit_date' => Carbon::now()->addDays(2)->toDateString(),
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
