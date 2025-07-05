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
        Schema::create('hadists', function (Blueprint $table) {
            $table->id();
            $table->integer('no_hadist');
            $table->text('isi_hadist');
            $table->foreignId('kitab_id')->references('id')->on('kitab')->onDelete('cascade');
            $table->foreignId('perawi_id')->references('id')->on('perawi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hadists');
    }
};
