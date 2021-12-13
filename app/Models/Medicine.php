<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $primaryKey = 'ml_id';
    protected $fillable = ['ml_name', 'ml_generic', 'ml_category', 'ml_pharmaceutical', 'ml_photo', 'ml_desc'];
}
