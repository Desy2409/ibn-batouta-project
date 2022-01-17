<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderEnglish extends Model
{
    public function header()
    {
        return $this->morphOne(Header::class, 'headerable');
    }
}
