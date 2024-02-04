<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

   public function up():void
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('groupName')->nullable();
            $table->string('password')->nullable();
            $table->string('confirmPassword')->nullable();
            $table->string('campus')->nullable();
            $table->string('namaKetua')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->string('tanggalLahir')->nullable();
            $table->string('gender')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('lineID')->nullable();
            $table->string('gitID')->nullable();
            $table->string('cv')->nullable();
            $table->string('flazz')->nullable();
            $table->timestamps();
            
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down():void
    {
        Schema::dropIfExists('registers');
    }
};