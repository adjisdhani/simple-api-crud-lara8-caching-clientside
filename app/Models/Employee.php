<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Define fillable properties
    protected $fillable = [
        'name',
        'email',
        'position',
        'salary',
    ];
}