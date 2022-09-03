<?php

namespace Database\Seeders;

use App\Models\Question;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 20; $i++) {
            $faq = new Question();
            $faq->question = $faker->text(20).'?';
            $faq->answer = $faker->realText(60);
            $faq->save();
        }
    }
}
