<?php

namespace Database\Seeders;

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
        $this->call([
            EmployeeSeeder::class,
            RoomsSeeder::class,
            ClientsSeeder::class,
            BookingsSeeder::class,
            TestimonialsSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
