<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Number');
            $table->string('Name');
            $table->tinyInteger('Gender');
            $table->string('Email')->unique()->nullable();
            $table->string('Tel')->unique()->nullable();
            $table->timestamps();
        });
        DB::table('user_types')->insert([
            'name' => 'student',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
