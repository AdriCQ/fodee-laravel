<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $table = 'reserves';
    protected $guarded = ['id'];
    protected $casts = ['accepted' => 'boolean'];
}
