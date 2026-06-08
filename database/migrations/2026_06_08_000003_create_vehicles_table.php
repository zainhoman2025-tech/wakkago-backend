<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint ) {
            ->uuid('id')->primary();
            ->foreignUuid('provider_id')->constrained('providers')->onDelete('cascade');
            ->enum('category', [
                'bike', 
                'keke_napep',
                'cargo_tricycle', 
                'small_car', 
                'space_bus', 
                'mini_bus', 
                'van', 
                'mini_truck', 
                'truck', 
                'trailer', 
                'tanker',
                'crane',
                'bulldozer',
                'forklift'
            ]);
            ->string('plate_number');
            ->json('model_details')->nullable();
            ->boolean('is_available')->default(true);
            ->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
