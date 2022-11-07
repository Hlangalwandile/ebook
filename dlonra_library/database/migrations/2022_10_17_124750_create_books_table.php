<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('ISBN')->nullable();
            $table->json('categories')->nullable();
            $table->string('author')->nullable();
            $table->json('images')->nullable();
            $table->string('discription')->nullable();
            $table->string('publisher')->nullable();
            $table->timestamps();
        });
        $categories = array("Electrical Engineering","Dlonra Books");
        $cat = json_encode($categories);
        $books = [
            ['title'=>'N1 Industrial Electronics Mo Arnold 2nd Edition', 'ISBN' => '9781991222534', 'categories'=> $cat , 'author'=> 'Mo Arnold', 'publisher' => 'Dlonra']
        ];
        DB::table('books')->insert($books);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
