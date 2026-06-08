<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('providers', function (Blueprint ) {
            ->uuid('id')->primary();
            ->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
            ->string('business_name');
            ->enum('kyc_status', ['pending', 'verified', 'rejected'])->default('pending');
            ->boolean('prefers_escrow')->default(true);
            ->decimal('latitude', 10, 8)->nullable();
            ->decimal('longitude', 11, 8)->nullable();
            ->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
