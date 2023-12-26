<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'employeeID',
        'lastName',
        'firstName',
        'middleName',
        'suffix',
        'roleCode',
        'designation',
        'email'
    ];
}
