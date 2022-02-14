<?php

namespace App\Models;


use \App\Models\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressurePoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
