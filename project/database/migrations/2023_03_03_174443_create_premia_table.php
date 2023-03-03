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
        Schema::create('premia', function (Blueprint $table) {
            $table->id("UserID");
            $table->boolean("Premium")->default(false);
            $table->date("RecurringDate")->nullable()->default(null);
            $table->string("CreditCard")->nullable()->default(null);
            $table->date("ExpDate")->nullable()->default(null);
            $table->string("CVV")->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premia');
    }
};
