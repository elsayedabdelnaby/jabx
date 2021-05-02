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
            $table->increments('id');
            $table->string('name');
            $table->string('short_description');
            $table->string('slug');
            $table->longText('description');
            $table->boolean('is_publish');
            $table->boolean('display_in_header');
            $table->string('image');
            $table->integer('sort')->default(1);
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->softDeletes();
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
