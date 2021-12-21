<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutEnglish extends Model
{
    public function about(){
        return $this->morphOne(About::class,'aboutable');
    }
}
