<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpportunityFrench extends Model
{
    public function opportunity()
    {
        return $this->morphOne(Opportunity::class, 'opportunityable');
    }
}
