<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\Brand;
use App\Models\Distributor;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransaksiExport;


class ManagerController extends Controller
{
    public function index()
    {
      $products = Product::all();
      $users = User::all();
      $transaksis = Transaksi::latest()->paginate(5);
     
  
     return view('manager.index',compact('transaksis','products','users'))
         ->with('i', (request()->input('page',1) - 1) * 5);//
  
    }
    public function product()
    {
     $brands = Brand::all();
     $distributors = Distributor::all();
     $products = Product::latest()->paginate(5);
     return view('manager.product',compact('products','brands','distributors'))
         ->with('i', (request()->input('page',1) - 1) * 5);
    }
    public function export_excel()
	{
		return Excel::download(new TransaksiExport, 'manager.xlsx');
    }
    public function cetakPertanggal($tgl_awal, $tgl_akhir)
    {
        $transaksis = Transaksi::with('kd_barang','kd_user')
    }

}
