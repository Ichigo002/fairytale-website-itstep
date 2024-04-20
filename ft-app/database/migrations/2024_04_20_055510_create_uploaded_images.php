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
        Schema::create('uploaded_images', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_fairytale');
            //$table->foreign('id_fairytale')->references('id')->on('fairytales')->onDelete('set null');
           
            $table->unsignedBigInteger('id_user');
            //$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->integer('page_number')->default(0); //Number says on which page of fairytale should occur :)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploaded_images');
    }
};
