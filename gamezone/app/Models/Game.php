<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'value',
        'release_date',
        'image',
    ];

    public function setBirthDateAttribute($value)
    {
        $this->attributes['release_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getBirthDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['release_date'])->format('m/d/Y');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
