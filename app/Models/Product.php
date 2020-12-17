<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Distributor;
class Product extends Model
{   
    use HasFactory;

    protected $table = 'products';

    //^ Merek Function Relasionship
    public function merek()
    {
        return $this->hasMany('App\Models\Brand');
    }
    
    //^ Distributor Function Relasionship
    public function distributors()
    {
        return $this->hasMany('App\Models\Distributor');
    }
    //^ Transaction Function Relasionship
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi');
    }

    protected $fillable =[
        'kd_barang','nama_barang','kd_merek','kd_distributor','tanggal_masuk','harga_barang','stok_barang','keterangan'
    ];
    protected $primaryKey = 'kd_barang';
    protected $foreignkey = 'kd_merek';
    // public $timestamps = false;

    
    
}