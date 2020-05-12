<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contaacts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("address");
            $table->string("phone");
            $table->string("mobile");
            $table->string("website");
            $table->text("about_us");
            $table->string("follow_us");
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
        Schema::dropIfExists('contaacts');
    }
}
