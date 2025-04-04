<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function job_categories() {
        return $this->belongsToMany(JobCategory::class);
    }

    public function job_skills() {
        return $this->belongsToMany(JobSkill::class);
    }
}
