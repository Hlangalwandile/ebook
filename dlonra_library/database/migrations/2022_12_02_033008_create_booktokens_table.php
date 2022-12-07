<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooktokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booktokens', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->integer('active')->default(0);
            $table->timestamps();
        });

         // Insert some stuff
        for ($i = 0; $i < 30; $i++) {
            DB::table('booktokens')->insert([
                'token' => Str::random(10),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booktokens');
    }
}
