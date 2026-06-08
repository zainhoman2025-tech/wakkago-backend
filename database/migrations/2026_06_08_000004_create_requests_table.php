<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('requests', function (Blueprint ) {
            ->uuid('id')->primary();
            ->foreignUuid('customer_id')->constrained('users')->onDelete('cascade');
            ->foreignUuid('vehicle_id')->nullable()->constrained('vehicles')->onDelete('set null');
            ->json('pickup_location');
            ->json('dropoff_location');
            ->decimal('distance_km', 8, 2);
            ->decimal('fuel_commitment_fee', 15, 2);
            ->decimal('platform_fee', 15, 2);
            ->enum('status', ['searching', 'accepted', 'en_route', 'arrived', 'completed', 'cancelled'])->default('searching');
            ->boolean('escrow_active')->default(true);
            ->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
