<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailFailer extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'fails',
    ];
}
