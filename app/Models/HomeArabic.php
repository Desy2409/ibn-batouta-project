<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeArabic extends Model
{
    public function home()
    {
        return $this->morphOne(Home::class, 'homeable');
    }
}
