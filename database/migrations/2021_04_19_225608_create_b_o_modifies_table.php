<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBOModifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_o_modifies', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('code');
            $table->string('boid');
            $table->string('name');
            $table->string('subject');
            $table->string('old');
            $table->string('new_date');
            $table->string('signature');
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
        Schema::dropIfExists('b_o_modifies');
    }
}
