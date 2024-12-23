<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatkulTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matkul', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 13)->unique();
            $table->string('nama', 128);
            $table->enum('Matkul', ['Grid', 'IOT','Mechin Learning','Rekayasa Web']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul');
    }
}
