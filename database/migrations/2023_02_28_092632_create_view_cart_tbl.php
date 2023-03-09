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
        Schema::create('view_cart_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on('users');
            $table->integer("pro_id")->unsigned();
            $table->foreign("pro_id")->references("id")->on('add_products_tbl');
;           $table->integer("qty");
            $table->float("price");
            $table->float("sub_total");
            $table->float("grand_total");
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
        Schema::dropIfExists('view_cart_tbl');
    }
};
