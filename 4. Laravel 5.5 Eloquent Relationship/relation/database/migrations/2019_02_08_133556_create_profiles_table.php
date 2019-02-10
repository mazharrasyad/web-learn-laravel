<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');  // PRIMARY KEY            
            $table->integer('user_id')->unsigned(); // unsigned() supaya tidak menerima angka 0 atau negatif untuk FOREIGN KEY            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // FOREIGN KEY, cascade untuk menghapus data meskipun ada data yang terkait
            $table->string('phone');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
