<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelMarket extends Model
{
    protected $table = 'market';
    protected $fillable = ['name', 'location'];
}
