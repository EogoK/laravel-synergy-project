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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('patonymic');
            $table->integer('passport');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer("age")->nullable();
            $table->string("book")->nullable();
            $table->string("university")->nullable();
            $table->string("status")->nullable();
            $table->string("bank_card")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
