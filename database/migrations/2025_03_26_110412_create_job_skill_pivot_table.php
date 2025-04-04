<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('job_skill_pivot', function (Blueprint $table) {
            $table->foreignId('job_id')->constrained()->onDelete('cascade');
            $table->foreignId('skill_id')->constrained('job_skills')->onDelete('cascade');
            $table->primary(['job_id', 'skill_id']);
        });
    }

    public function down() {
        Schema::dropIfExists('job_skill_pivot');
    }
};
