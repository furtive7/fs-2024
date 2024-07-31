<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'duration',
        'description',
        'country',
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }

}
