<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    public function job() {
        return $this->belongsToMany(Job::class);
    }
}
