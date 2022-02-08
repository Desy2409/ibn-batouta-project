<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderArabic extends Model
{
    public function header()
    {
        return $this->morphOne(Header::class, 'headerable');
    }
}
