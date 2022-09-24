<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $fillable = ['title', 'content','price'];
}
