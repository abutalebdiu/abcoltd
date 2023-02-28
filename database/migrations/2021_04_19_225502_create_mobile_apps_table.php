<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_apps', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('code');
            $table->string('name');
            $table->string('type');
            $table->string('client_type');
            $table->string('domicile');
            $table->string('usetype');
            $table->string('mobile');
            $table->string('email');
            $table->string('maapplication');
            $table->string('fee')->nullable();
            $table->string('signature');
            $table->string('photo');
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
        Schema::dropIfExists('mobile_apps');
    }
}
