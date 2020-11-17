<?php

namespace App\Models\MAS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'nis','name','birth_date','gender','class_id','phone','address'
    ];
    protected $table ='mas_students';
    protected $primaryKey = 'nis';
    public $timestamps = false;
}
