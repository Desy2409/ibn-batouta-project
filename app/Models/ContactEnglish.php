<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEnglish extends Model
{
    public function contact()
    {
        return $this->morphOne(Contact::class, 'contactable');
    }
}
