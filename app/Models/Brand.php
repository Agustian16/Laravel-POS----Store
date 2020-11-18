<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable =[
        'kd_merek','merek'
    ];
    protected $table ='brands';
    protected $primaryKey = 'kd_merek';
    // public $timestamps = false;
}
