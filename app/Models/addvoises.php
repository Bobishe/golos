<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addvoises extends Model
{

    protected $fillable = ['nameSong', 'author'];
    use HasFactory;
}
