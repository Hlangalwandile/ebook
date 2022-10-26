<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(0);
            $table->json('books')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        $users = [
            ['name'=>'Henry', 'email' => 'henry.bani.hb@gmail.com','role' => 1,'password' => '$2y$10$upiJsfT9xbHvGf4BCQTs0.UuK2sjcjSU0PfQMh8tEkymnAOQHGwZG'],
            ['name'=>'student_1', 'email' => 'student_1@gmail.com','role' => 2,'password' => '$2y$10$pxacJ7/kfJf5xeKnswNCcuwkN8O2IbcSryao5P7KZsL07DjiDQJLm'],
            ['name'=>'student_2', 'email' => 'student_2@gmail.com','role' => 2,'password' => '$2y$10$fjm1wd4Naw5D7K0K806FdOaiYsYzZ8r10wKFFGgKsklNm8Ez6Pncq'],
            ['name'=>'student_3', 'email' => 'student_3@gmail.com','role' => 2,'password' => '$2y$10$wvREOvBiNX3j2rrrAHjG..o.rdB9l.lzN/zWVhkLZqEw5ELfcb0I.'],
            ['name'=>'teacher_1', 'email' => 'teacher_1@gmail.com','role' => 3,'password' => '$2y$10$SjuNh37hzOwmaHj9I3HmPuz6Ucb.Tw96zOEcyEm.mlFLj9IZ9snRi'],
            ['name'=>'teacher_2', 'email' => 'teacher_2@gmail.com','role' => 3,'password' => '$2y$10$/2ZqpvjHvitYjLvj0T26d.7Kngtmn62Eq9hjiInLXaLB9DYwAqQgi']
        ];
         // Insert some stuff
        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
