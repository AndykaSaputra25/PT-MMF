<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->text('mmf');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('email_3')->nullable();
            $table->string('email_4')->nullable();
            $table->string('wa_1');
            $table->string('wa_2')->nullable();
            $table->string('wa_3')->nullable();
            $table->string('wa_4')->nullable();
            $table->string('linkedin');
            $table->string('ig_1');
            $table->string('ig_2')->nullable();
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
        Schema::dropIfExists('contact');
    }
}
