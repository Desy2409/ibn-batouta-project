<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubHomeFrench extends Model
{
    public function subHome()
    {
        return $this->morphOne(SubHome::class, 'subhomeable');
    }
}
