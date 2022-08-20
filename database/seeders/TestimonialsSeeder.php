<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Testimonial;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) {
            $testimonial =  new Testimonial();
            $testimonial->client_id = random_int(1,count(Client::all()));
            $testimonial->testimonial = $faker->realText;
            $testimonial->created_by = 1;
            $testimonial->save();
        }
    }
}
