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
        Schema::create('addblogs_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->string("blogtitle");
            $table->string("addblog");
            $table->date("blogdate");
            $table->string("blogimage");
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
        Schema::dropIfExists('addblogs_tbl');
    }
};
