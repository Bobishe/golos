<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    protected $fillable = ['nameSong', 'author', 'voise', 'url'];
    use HasFactory;
}
