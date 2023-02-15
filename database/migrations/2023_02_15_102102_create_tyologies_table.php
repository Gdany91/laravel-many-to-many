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
        Schema::create('tyologies', function (Blueprint $table) {
            $table->id();

            $table -> string('code', 5) -> unique();
            $table -> string('name', 32);
            $table -> boolean ('digital') -> default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tyologies');
    }
};
