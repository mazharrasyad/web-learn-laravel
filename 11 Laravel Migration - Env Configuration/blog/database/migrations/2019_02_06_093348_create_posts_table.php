<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */     
    public function up()
    {
        // Method up() ini akan melakukan import table ke database
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            // Untuk melihat tipe datanya dapat melihat di : 
            // https://laravel.com/docs/5.5/migrations#columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Method down() ini akan menghapus table ketika table sudah ada
        Schema::dropIfExists('posts');
    }
}
