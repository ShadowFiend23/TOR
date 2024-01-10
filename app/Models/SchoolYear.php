<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;

    protected $fillable = [
        "minYear",
        "maxYear",
        "firstSem",
        "secondSem"
    ];

    protected $table = "school_year";
}
