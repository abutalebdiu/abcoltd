<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBOOpensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_o_opens', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('code')->nullable();
            $table->string('boid')->nullable();
            $table->string('name');
            $table->string('father');
            $table->string('mother');
            $table->string('spouse')->nullable();
            $table->string('sex');
            $table->string('address');
            $table->string('mailingaddress');
            $table->string('city');
            $table->string('zip_code');
            $table->string('state');
            $table->string('country')->nullable();
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('dob');
            $table->string('passport')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('validity_date')->nullable();
            $table->string('nationality');
            $table->string('nid');
            $table->string('profession');
            $table->string('bank');
            $table->string('account');
            $table->string('routing');
            $table->string('bo_category');
            $table->string('account_type');
            $table->string('electronic_divident')->nullable();
            $table->string('statementcycle')->nullable();
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
        Schema::dropIfExists('b_o_opens');
    }
}
