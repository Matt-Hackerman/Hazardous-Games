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
        Schema::create('games', function (Blueprint $table) {
            $table->id("GameID");
            $table->string("Title")->unique();
            $table->string("Developer");
            $table->integer("playCount")->default(0);
            $table->integer("HighScore")->default(0);
            $table->integer("RecordHolder")->nullable();
            $table->float("Rating");
            $table->string("URL")->unique();
            $table->string("ThumbURL");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
