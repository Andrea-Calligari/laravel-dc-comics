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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('description')->nullable();
            $table->string('thumb')->nullable();
            $table->decimal('price', 7,2);
            $table->string('series', 150);
            $table->date('sale_date')->format('Y-m-d');
            $table->string('type', 100);
            $table->string('artists')->nullable();
            $table->string('writers',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
