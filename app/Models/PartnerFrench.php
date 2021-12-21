<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerFrench extends Model
{
    public function partner()
    {
        return $this->morphOne(Partner::class, 'partnerable');
    }
}
