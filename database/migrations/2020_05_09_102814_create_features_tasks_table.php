<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_tasks', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("content");
            $table->string("font");
            $table->unsignedInteger("feature_id")->default(1);
            $table->text("text");
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
        Schema::dropIfExists('features_tasks');
    }
}
