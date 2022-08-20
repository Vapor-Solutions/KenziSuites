<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomType;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 40; $i++) {
            $room = new Room();
            $room->room_type_id = random_int(1, count(RoomType::all()));
            $room->room_number = 'Room No. '.$i+1;
            $room->save();
        }
    }
}
