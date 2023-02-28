<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_posts', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('title');
            $table->string('position');
            $table->string('qualification');
            $table->string('experice');
            $table->string('location');
            $table->string('salary');
            $table->string('dead_line');
            $table->string('vacancy');
            $table->string('link')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('career_posts');
    }
}
