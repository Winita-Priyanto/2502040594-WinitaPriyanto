<?php

namespace App\Models;

use Database\Seeders\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    public function Review(){
        return $this->belongsTo(Review::class);
    }

    public function Detail(){
        return $this->hasOne(Detail::class);
    }
}
