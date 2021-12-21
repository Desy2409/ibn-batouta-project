<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationEnglish extends Model
{
    public function information()
    {
        return $this->morphOne(Information::class, 'informationable');
    }
}
