<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->integer('bookID');
            $table->integer('moduleID');
            $table->integer('order');
            $table->integer('type')->nullable();
            $table->string('title')->nullable();
            $table->string('header')->nullable();
            $table->text('text')->nullable();
            $table->json('image1')->nullable();
            $table->json('image2')->nullable();
            $table->json('image3')->nullable();
            $table->json('image4')->nullable();
            $table->timestamps();
        });
        $units = [
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 1,'type'=>1 ,'title'=> 'Introduction','header'=> 'So what is Industrail Electronics','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>'],
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 2,'type'=>2 ,'title'=> 'Electricity','header'=> 'So what is Electricity','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>']
        ];
        DB::table('units')->insert($units);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
