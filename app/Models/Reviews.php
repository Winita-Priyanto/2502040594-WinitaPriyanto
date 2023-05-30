<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    public function Books(){
        return $this->hasMany(Book::class);
    }
}
