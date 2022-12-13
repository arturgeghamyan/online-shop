<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     *
     */
    public function up()
    {
         Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->integer("count");
            $table->integer("price");
            $table->string("discription");
            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
            $table->integer("category_id")->unsigned();
            $table->foreign("category_id")->references("id")->on("categories")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('products');
    }
}
