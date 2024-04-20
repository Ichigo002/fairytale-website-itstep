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
        Schema::table('users', function (Blueprint $table) {
            $table->date('date_of_birth')->default('1900-01-01');
            $table->integer('role')->default(1); 
            /*
            1 - standard user role. add own images, etc.
            4 - standard admin - can create, edit, delete ONLY his fairytales.
            6 - super root, administrator, can create, delete, edit every fairytale
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
