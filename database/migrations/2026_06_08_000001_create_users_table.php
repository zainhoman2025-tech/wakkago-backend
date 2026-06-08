<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint ) {
            ->uuid('id')->primary();
            ->string('name');
            ->string('phone')->unique();
            ->string('email')->unique();
            ->string('password');
            ->enum('role', ['customer', 'admin'])->default('customer');
            ->decimal('wallet_balance', 15, 2)->default(0.00);
            ->rememberToken();
            ->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
