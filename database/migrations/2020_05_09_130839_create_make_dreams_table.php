<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeDreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_dreams', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("content");
            $table->string("font");
            $table->string("btn_name");
            $table->string("btn_link");
            $table->string("sec_btn");
            $table->string("secbtn_link");
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
        Schema::dropIfExists('make_dreams');
    }
}
