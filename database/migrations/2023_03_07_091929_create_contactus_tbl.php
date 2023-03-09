<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->string("fname");
            $table->string("lname");
            $table->bigInteger("number");
            $table->string("city");
            $table->string("email");
            $table->string("message");            
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
        Schema::dropIfExists('contactus_tbl');
    }
};
