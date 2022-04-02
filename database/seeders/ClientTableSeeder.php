<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientnya=[
            [
                'name' => "Ali",
                'age' => 17,
                'gender' => "M",
                'city' => "Semarang"
            ],
            [
                'name' => "Aisyah",
                'age' => 35,
                'gender' => "F",
                'city' => "Solo"
            ],
            [
                'name' => "Salim",
                'age' => 29,
                'gender' => "M",
                'city' => "Jogja"
            ],
            [
                'name' => "Budi",
                'age' => 24,
                'gender' => "M",
                'city' => "Semarang"
            ],
            [
                'name' => "Eko",
                'age' => 18,
                'gender' => "M",
                'city' => "Solo"
            ],
            [
                'name' => "Umar",
                'age' => 20,
                'gender' => "M",
                'city' => "Jogja"
            ],
            [
                'name' => "Abdurrahman",
                'age' => 32,
                'gender' => "M",
                'city' => "Semarang"
            ],
            [
                'name' => "Daniel",
                'age' => 23,
                'gender' => "M",
                'city' => "Solo"
            ],
            [
                'name' => "Linda",
                'age' => 28,
                'gender' => "F",
                'city' => "Jogja"
            ],
            [
                'name' => "Hasan",
                'age' => 40,
                'gender' => "M",
                'city' => "Semarang"
            ],
            [
                'name' => "Husna",
                'age' => 19,
                'gender' => "F",
                'city' => "Solo"
            ],
            [
                'name' => "Putri",
                'age' => 45,
                'gender' => "F",
                'city' => "Jogja"
            ],
            [
                'name' => "Wahyu",
                'age' => 51,
                'gender' => "M",
                'city' => "Semarang"
            ],
            [
                'name' => "Mansur",
                'age' => 47,
                'gender' => "M",
                'city' => "Solo"
            ],
            [
                'name' => "Sarah",
                'age' => 32,
                'gender' => "F",
                'city' => "Jogja"
            ]
        ];

        \DB::table('clients')->insert($clientnya);
    }
}
