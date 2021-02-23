<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaraplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_laraples', function (Blueprint $table) {
            $table->id();
            $table->string("gambar",100);
            $table->string("nama",50);
            $table->string("slug",50);
            $table->string("asal",50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_laraples');
    }
}
