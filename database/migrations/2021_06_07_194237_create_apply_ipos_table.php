<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyIposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_ipos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount');
            $table->integer('client_code');
            $table->string('mobile');
            $table->integer('instrument_code');
            $table->integer('user_id');
            $table->integer('status')->default(1);

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
        Schema::dropIfExists('apply_ipos');
    }
}
