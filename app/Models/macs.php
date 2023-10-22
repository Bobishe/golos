<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class macs extends Model
{
    protected $fillable = ['IpAddress'];
    use HasFactory;
}
