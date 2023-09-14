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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('xp')->default(0);
            $table->bigInteger('mission_index')->default(1);
            $table->text("alamat")->nullable();
            $table->string("tgl_lahir")->nullable();
            $table->string('profile')->default('https://komikscolar.id/img/alisa.png');
            $table->string('avatar')->nullable();
            $table->integer('login')->default(0);
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id')->references('id')->on('books');
            $table->rememberToken();
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
