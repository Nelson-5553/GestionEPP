<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Epp extends Model
{
    protected $fillable = ['name','description','cantidad','unity', 'image'];
}
