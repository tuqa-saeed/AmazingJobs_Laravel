<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('api_source');
            $table->string('title')->index();
            $table->text('description');
            $table->decimal('budget', 10, 2)->nullable()->index();
            $table->string('location')->nullable()->index();
            $table->string('category')->index();
            $table->text('skills')->index();
            $table->string('url');
            $table->dateTime('posted_at')->index();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('jobs');
    }
};
