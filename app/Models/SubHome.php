<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubHome extends Model
{
    protected $fillable = ['sub_title', 'sub_description'];

    public function subhomeable()
    {
        return $this->morphTo();
    }
}
