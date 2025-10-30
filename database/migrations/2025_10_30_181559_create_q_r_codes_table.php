<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('q_r_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setting_id')->constrained()->cascadeOnDelete();
            $table->string('name')->nullable(); // QR kodun adı veya açıklaması
            $table->string('code')->unique(); // QR kod verisi, örn: link
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('q_r_codes');
    }
};
