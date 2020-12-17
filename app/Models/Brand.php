<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{   
    protected $table ='brands';

    public function barang(){
        return $this->belongsTo('App\Models\Product');
    }

    use HasFactory;
    protected $fillable =[
        'kd_merek','merek'
    ];
   
    protected $primaryKey = 'kd_merek';
    // public $timestamps = false;
}
