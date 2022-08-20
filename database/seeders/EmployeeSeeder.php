<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
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
            $employee = new User();
            $employee->name = $faker->name();
            $employee->email = Str::slug($employee->name).'@example.com';
            $employee->password = Hash::make('1234567890');
            $employee->save();
            $employee->roles()->attach(3);
        }
    }
}
