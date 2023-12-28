<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++){
            $id = $faker->unique()->randomNumber(9);
            $nama = $faker->sentence(1);
            $jenis = $faker->randomElement(['Personal', 'Bisnis']);
            $created_at = $faker->dateTimeBetween('-1 year', 'now');

            DB::table('accounts')->insert([
                'id' => $id,
                'nama' => $nama,
                'jenis' => $jenis,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }

    }
}
