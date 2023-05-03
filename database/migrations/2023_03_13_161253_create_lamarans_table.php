<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->integer('age');
            $table->string('phone_number');
            $table->enum('last_education', ['SMA', 'SMK', 'Universitas']);
            $table->string('education_name');
            $table->string('cv_file');
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
        Schema::dropIfExists('lamarans');
    }
};
