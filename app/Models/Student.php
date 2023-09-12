<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'class_id',
        'name',
        'email',
        'adress',
        'phone_number',
    ];
}
