<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    public function headerable(){
        return $this->morphTo();
    }
}
