<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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

        $faker = Faker::create();
        foreach (range(1,30) as $index) {
            DB::table('news_letter_subscriptions')->insert([
                'email' => $faker->email,
            ]);
        }
    }
}
