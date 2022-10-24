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
            $table->string('title');
            $table->string('header');
            $table->text('text');
            $table->string('image')->nullable();
            $table->timestamps();
        });
        $units = [
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 1,'title'=> 'Introduction','header'=> 'So what is Industrail Electronics','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>'],
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 2,'title'=> 'Electricity','header'=> 'So what is Electricity','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>'],
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 3,'title'=> 'Light Current','header'=> 'So what is Light Current','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>'],
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 4,'title'=> 'Heavy Current','header'=> 'So what is Heavy Current','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>'],
            ['bookID'=> 1,'moduleID'=> 1,'order'=> 5,'title'=> 'Whats next','header'=> 'So what is Next Industrail Electronics','text'=> '<ul><li>Step 1</li><li>Step 2</li><li>Step 3</li></ul>']
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
