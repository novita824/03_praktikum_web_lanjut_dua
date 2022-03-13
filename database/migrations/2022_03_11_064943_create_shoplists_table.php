<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoplistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoplists', function (Blueprint $table) {
            $table->id();
            $table->string('productname', 255)->wishlist();
            $table->string('unitprice', 100)->wishlist();
            $table->text('stock')->nullable();
            $table->boolean('draft')->default(false);
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
        Schema::dropIfExists('shoplists');
    }
}