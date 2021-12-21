<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnglish extends Model
{
    public function admission()
    {
        return $this->morphOne(Admission::class, 'admissionable');
    }
}
