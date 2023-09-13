<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id',
        'ime',
        'prezime',
        'komentar',
        'odgovorZa'
    ];
    public static function izdvojiPoIndeksu($indeks)
    {
        return static::where('package_id', $indeks)->get();
    }
}
