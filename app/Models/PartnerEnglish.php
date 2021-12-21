<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerEnglish extends Model
{
    public function partner()
    {
        return $this->morphOne(Partner::class, 'partnerable');
    }
}
