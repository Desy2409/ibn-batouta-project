<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['title', 'description'];

    public function homeable()
    {
        return $this->morphTo();
    }
}
