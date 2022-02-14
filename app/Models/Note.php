<?php

namespace App\Models;

use \App\Models\Person;;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        "person_id",
        "text",
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
