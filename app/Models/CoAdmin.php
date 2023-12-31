<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoAdmin extends Model
{
    use HasFactory;

    protected $table = "co-admin";

    protected $fillable = [
        'adminID',
        'lastName',
        'firstName',
        'middleName',
        'suffix',
        'roleCode',
        'designation',
        'email'
    ];
}
