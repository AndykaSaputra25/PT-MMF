<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('icon');
            $table->string('name_1');
            $table->string('name_2');
            $table->string('name_3')->nullable();
            $table->string('meet');
            $table->string('service');
            $table->string('desk_1');
            $table->string('desk_2');
            $table->string('desk_3')->nullable();
            $table->string('alamat_1');
            $table->string('alamat_2');
            $table->string('alamat_3')->nullable();
            $table->text('maps_1');
            $table->text('maps_2');
            $table->text('maps_3')->nullable();
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
        Schema::dropIfExists('about');
    }
}
