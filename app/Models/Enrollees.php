<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollees extends Model
{
    use HasFactory;

    protected $fillable = [
        "studentID",
        "enrolledSubjects",
        "year",
        "semester",
        "schoolYear",
        "grades",
        "studentType"
    ];
}
