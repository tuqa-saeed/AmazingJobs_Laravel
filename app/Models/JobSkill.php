<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    public function job() {
        return $this->belongsToMany(Job::class);
    }
}
