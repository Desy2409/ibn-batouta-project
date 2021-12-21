<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerArabic extends Model
{
    public function partner()
    {
        return $this->morphOne(Partner::class, 'partnerable');
    }
}
