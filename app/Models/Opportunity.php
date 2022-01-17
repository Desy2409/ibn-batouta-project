<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable = ['scholarship', 'adapted_curricula', 'teaching_modality', 'future_job', 'multimedia_center', 'choice_partnership'];

    public function opportunityable()
    {
        return $this->morphTo();
    }
}
