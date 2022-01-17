<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationFrench extends Model
{
    public function information()
    {
        return $this->morphOne(Information::class, 'informationable');
    }
}
