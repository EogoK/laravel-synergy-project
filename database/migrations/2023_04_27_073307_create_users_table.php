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
            $table->text('name');
            $table->text('surname');
            $table->text('patonymic');
            $table->integer('passport');
            $table->text('email')->unique();
            $table->text('password');
            $table->integer("age")->default(null);
            $table->text("book")->default(null);
            $table->text("university")->default(null);
            $table->text("status")->default(null);
            $table->text("bank_card")->default(null);
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
