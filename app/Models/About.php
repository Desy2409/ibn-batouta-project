<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['mission', 'plan', 'vision'];

    public function aboutable()
    {
        return $this->morphTo();
    }
}
