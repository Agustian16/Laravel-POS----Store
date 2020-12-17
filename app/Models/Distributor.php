<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Distributor extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }

    use HasFactory;
    protected $fillable =[
        'kd_distributor','nama_distributor','alamat','no_telp'
    ];

    protected $primaryKey = 'kd_distributor';
    // protected $table = 'distributor';
}
