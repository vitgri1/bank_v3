<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jonas',
            'email' => 'jonas@gmail.com',
            'password' => Hash::make('abc123'),
        ]);
        
        $faker = Faker::create();

        foreach(range(1, 15) as $_) {
            DB::table('clients')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'pid' => rand(10000000000, 99999999999),
                'iban' => 'LT'.rand(100000000000000000, 999999999999999999),
                'funds' => (float) rand(0, 1000000).'.'.rand(0, 99),
            ]);
        }
    }
}
