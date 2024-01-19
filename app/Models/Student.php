<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'contact_no',
        'email',
        'dob',
        'address',
        'no_of_modules_completed',
        'average_marks',
    ];
}
