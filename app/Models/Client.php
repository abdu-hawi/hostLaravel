<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'job_title',
        'company_name',
        'mobile',
        'email',
        'industry',
        'interested',
        'is_sent_email',
        'registeration_code',
        'is_presence',
    ];
}
