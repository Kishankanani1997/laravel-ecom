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
        Schema::create('add_products_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("cat_id")->unsigned();
            $table->foreign("cat_id")->references("id")->on('add_category_tbl');
            $table->integer("subcat_id")->unsigned();
            $table->foreign("subcat_id")->references("id")->on('add_subcategory_tbl');
            $table->string("pro_name");
            $table->string("pro_image");
            $table->text("pro_details");
            $table->string("pro_oldprice");
            $table->float("pro_newprice");
            $table->integer("pro_qty");

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
        Schema::dropIfExists('add_products_tbl');
    }
};
