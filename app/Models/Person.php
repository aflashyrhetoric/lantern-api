<?php

namespace App\Models;

use \App\Models\Note;
use \App\Models\PressurePoint;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "user_id",
        "first_name",
        "last_name",
        "career",
        "mobile",
        "email",
        "address",
        "dob",
    ];

    protected $casts = [
        'dob' => 'datetime',
    ];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function pressurePoints()
    {
        return $this->hasMany(PressurePoint::class);
    }
}
