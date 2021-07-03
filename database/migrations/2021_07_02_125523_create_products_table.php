<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->integer('pprice') ;
            $table->string('pcolor')->nullable();
            $table->string('psize');
            $table->integer('pquantity');
            $table->integer('category_id');
            $table->integer('sellers_id')->nullable();
            $table->text('pimage');
            $table->boolean('pstatus')->default(1)->comment('0-inactive,1-inactive');
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
