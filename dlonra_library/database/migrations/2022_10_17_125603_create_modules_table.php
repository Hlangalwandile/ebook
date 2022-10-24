<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->integer('bookID');
            $table->string('title');
            $table->timestamps();
        });

        $modules = [
            ['order'=> 1, 'bookID' => 1, 'title' => 'The Fundamentals of Industrial Electronics',]
        ];
        DB::table('modules')->insert($modules);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
