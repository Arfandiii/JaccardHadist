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
        Schema::create('document_terms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hadist_id')->constrained('hadists')->cascadeOnDelete();
            $table->string('term');
            $table->integer('tf');
            $table->double('tfidf');
            $table->timestamps();
            
            $table->index(['term', 'hadist_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_terms');
    }
};
