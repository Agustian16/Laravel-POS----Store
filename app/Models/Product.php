<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
class Product extends Model
{   
    use HasFactory;
    
    public function brands()
    {
        return $this->belongsTo('App\Models\Brand','kd_merek');
    }

    
    protected $fillable =[
        'kd_barang','nama_barang','kd_merek','kd_distributor','tanggal_masuk','harga_barang','stok_barang','keterangan'
    ];
    protected $table ='products';
    protected $primaryKey = 'kd_barang';
    protected $foreignkey = 'kd_merek';
    // public $timestamps = false;

    
    
}