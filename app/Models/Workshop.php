<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'job_title',
        'company_name',
        'mobile',
        'email',
        'Workshop_name',
        'is_sent_email',
    ];
}
