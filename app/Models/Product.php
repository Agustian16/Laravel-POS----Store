<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'kd_barang','nama_barang','kd_merek','kd_distributor','tanggal_masuk','harga_barang','stok_barang','keterangan'
    ];
    protected $table ='products';
    protected $primaryKey = 'kd_barang';
    // public $timestamps = false;
}