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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            [
                'id'=>1,
                'title'=>'Super Administrator',
                'description'=>'Is in Full Control of the system'
            ],
            [
                'id'=>2,
                'title'=>'General Administrator',
                'description'=>'Is in Full Control of the system but cannot create or delete new Administrators'
            ],
            [
                'id'=>3,
                'title'=>'Employee',
                'description'=>'Can Manage Bookings'
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
        Schema::dropIfExists('roles');
    }
};
