<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Untitled Blog'); // Set a default value
            $table->text('content');
            $table->string('author_name');
            $table->string('author_email');
            $table->timestamps();
        });       
    }
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
