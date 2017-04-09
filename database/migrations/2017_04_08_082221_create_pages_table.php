<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string("slug")->unique();
            $table->string("first_title");
            $table->string("second_title")->nullable();
            $table->longText("content")->nullabel();
            $table->integer("parent_id")->default(0);
            $table->integer("author_id");
            $table->text("description")->nullable();
            $table->string("template")->default("page");
            // $table->string("");
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
        Schema::dropIfExists('pages');
    }
}
