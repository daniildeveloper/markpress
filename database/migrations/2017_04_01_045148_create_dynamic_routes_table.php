<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('method', 24);
            $table->text("name");
            $table->text("pattern");
            $table->text("handler");
            $table->text('configuration');
            $table->boolean('userspace')->default(true);
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
        Schema::dropIfExists('dynamic_routes');
    }
}
