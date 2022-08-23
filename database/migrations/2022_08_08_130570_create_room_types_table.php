<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price_kes');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('room_types')->insert([
            [
                'title'=>'Bed Sitter',
                'price_kes'=>10000
            ],
            [
                'title'=>'One Bedroom',
                'price_kes'=>15000
            ],
            [
                'title'=>'Two Bedroom',
                'price_kes'=>18000
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
};
