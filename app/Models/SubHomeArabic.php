<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubHomeArabic extends Model
{
    public function subHome()
    {
        return $this->morphOne(SubHome::class, 'subhomeable');
    }
}
