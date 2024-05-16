<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'message',
    ];
}
