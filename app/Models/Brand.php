<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    public function products(){
        return $this->hasMany(Product::class);
    }

    use HasFactory;
    protected $fillable =[
        'kd_merek','merek'
    ];
    protected $table ='brands';
    protected $primaryKey = 'kd_merek';
    // public $timestamps = false;
}
