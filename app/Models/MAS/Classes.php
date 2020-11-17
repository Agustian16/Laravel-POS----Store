<?php

namespace App\Models\MAS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable =[
        'id','name'
    ];
    protected $table ='mas_classes';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
