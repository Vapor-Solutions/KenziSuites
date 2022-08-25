<?php

namespace Database\Seeders;

use App\Models\Client;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 50; $i++) {
            $client = new Client();
            $client->name = $faker->firstName.' '.$faker->lastName;
            $client->email = Str::slug($client->name).'@example.com';
            $client->phone_number = $faker->phoneNumber;
            if (Client::where('phone_number', $client->phone_number)->exists()) {
                $client->phone_number = $faker->phoneNumber;
            }
            $client->address1 = $faker->address;
            $client->city = $faker->city;
            $client->country = $faker->country;
            $client->created_by = 1;
            $client->save();
        }
    }
}
