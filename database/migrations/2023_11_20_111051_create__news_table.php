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
        Schema::create('_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title',100);
            $table->text('content');
            $table->string('author');
            $table->string('image',100);
            $table->boolean('published');
           // $table->softDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_news');
    }
};
