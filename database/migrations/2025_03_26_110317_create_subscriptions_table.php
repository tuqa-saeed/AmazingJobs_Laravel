<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('plan', ['basic', 'premium', 'pro']);
            $table->decimal('price', 10, 2);
            $table->enum('status', ['active', 'expired', 'canceled'])->default('active');
            $table->dateTime('started_at');
            $table->dateTime('expires_at');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('subscriptions');
    }
};
