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
        Schema::create('lisence', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('lisensor');
            $table->string('period');
            $table->string('counter');
            $table->string('location');
            $table->string('pic');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lisence');
    }
};
