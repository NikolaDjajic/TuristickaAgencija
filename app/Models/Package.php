<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'naslov',
        'godDoba',
        'brNocenja',
        'cijena',
        'slika',
        'adresa',
        'polazak',
        'prevoz',
        'opis',
        'vrsta',
        'hotel'
    ];
   
    public function comments()
{
    return $this->hasMany(Comment::class);
}
}

