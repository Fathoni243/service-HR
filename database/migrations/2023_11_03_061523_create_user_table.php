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
            $table->unsignedBigInteger('department_Id');
            $table->unsignedBigInteger('hierarchy_Id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('nik');
            $table->string('contact');
            $table->string('alamat');
            $table->date('tanggal_masuk');
            $table->double('salary', 8, 2);
            $table->timestamps();

            $table->foreign('department_Id')->references('id')->on('departments');
            $table->foreign('hierarchy_Id')->references('id')->on('hierarchies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
