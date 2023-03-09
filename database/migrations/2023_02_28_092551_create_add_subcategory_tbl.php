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
        Schema::create('add_subcategory_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("cat_id")->unsigned();
            $table->foreign("cat_id")->references("id")->on('add_category_tbl');
            $table->string("subcat_name");
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
        Schema::dropIfExists('add_subcategory_tbl');
    }
};
