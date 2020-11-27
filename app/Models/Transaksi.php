<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable =['kd_transaksi','kd_barang','kd_user','jumlah_beli','total_harga','tanggal_beli'];

}
