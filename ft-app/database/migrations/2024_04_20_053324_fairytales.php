<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fairytales', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_user');
            //$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_author')->nullable();
            //$table->foreign('id_author')->references('id')->on('authors')->onDelete('set null');
            
            $table->string('title');

            $table->longText('txt_ukr');
            $table->longText('txt_alt');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fairytales');
    }};
