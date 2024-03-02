<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    public function jobType() {
        return $this->belongsTo(JobType::class);
    }

    public function categorie() {
        return $this->belongsTo(Category::class);
    }
}
