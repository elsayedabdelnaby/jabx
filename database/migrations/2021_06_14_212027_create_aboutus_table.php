<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ourmission');
            $table->string('why_choose_us');
            $table->string('what_we_do');
            $table->string('main_section_title');
            $table->string('main_section_description');
            $table->integer('projects_number');
            $table->integer('users_number');
            $table->integer('awards_number');
            $table->string('main_section_image');
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->string('banner');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutus');
    }
}
