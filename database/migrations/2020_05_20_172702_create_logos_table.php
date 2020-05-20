<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogosTable extends Migration
{

    public function up()
    {
        Schema::create('logos', function (Blueprint $table) {
            $table->id();
            $table->string("main_logo");
            $table->string("header_logo");
            $table->string("footer_image");
            $table->string("alt");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('logos');
    }
}
