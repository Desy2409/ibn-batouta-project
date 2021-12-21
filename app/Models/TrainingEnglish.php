<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingEnglish extends Model
{
    public function training()
    {
        return $this->morphOne(Training::class, 'trainingable');
    }
}
