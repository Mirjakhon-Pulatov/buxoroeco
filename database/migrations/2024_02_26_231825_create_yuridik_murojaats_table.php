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
        Schema::create('yuridik_murojaats', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->integer('t_raqam');
            $table->integer('code');
            $table->string('fullname');
            $table->string('mainactivities');
            $table->string('inn');
            $table->string('header_name');
            $table->string('email');
            $table->string('phone');
            $table->string('title');
            $table->string('text');
            $table->string('file_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yuridik_murojaats');
    }
};
