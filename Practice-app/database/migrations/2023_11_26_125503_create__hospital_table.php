<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_hospital', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname', 255);
            $table->string('lastname', 255);
            $table->string('Hospital', 255);
            $table->string('Doctor', 255);
            $table->string('Email', 255);
            $table->string('Password', 255);
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
        Schema::dropIfExists('_hospital');
    }
};
