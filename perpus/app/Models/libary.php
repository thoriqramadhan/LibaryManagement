<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libary extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = [
        'books',
        'user'
    ];
}

