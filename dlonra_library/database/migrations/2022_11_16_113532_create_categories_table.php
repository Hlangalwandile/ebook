<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parentID')->default(0);
        });
        $cat = [
            ['name'=>'Electrical Engineering'],
            ['name'=>'Civil Engineering'],
            ['name'=>'Mechanical Engineering'],
            ['name'=>'Engineering'],
            ['name'=>'"Dlonra Books']
        ];
        DB::table('categories')->insert($cat);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
