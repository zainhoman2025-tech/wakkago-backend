<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint ) {
            ->uuid('id')->primary();
            ->foreignUuid('request_id')->constrained('requests')->onDelete('cascade');
            ->decimal('amount', 15, 2);
            ->enum('type', ['fee', 'payout', 'refund', 'fuel_guarantee']);
            ->enum('status', ['pending', 'success', 'failed'])->default('pending');
            ->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
