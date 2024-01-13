<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        "studentID",
        "lastName",
        "firstName",
        "middleName",
        "suffix",
        "email",
        "course",
        "curriculum"
    ];
}
