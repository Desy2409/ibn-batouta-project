<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFrench extends Model
{
    public function home()
    {
        return $this->morphOne(Home::class, 'homeable');
    }
}
