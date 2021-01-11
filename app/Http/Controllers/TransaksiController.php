<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\TransactionView;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransaksiExport;



class TransaksiController extends Controller
{
    public function index()
    {
      $products = Product::all();
      $users = User::all();
      $transaksis = TransactionView::latest()->paginate(5);
     return view('transaksi.index',['transaksi'=>$transaksis],compact('transaksis','products'))
         ->with('i', (request()->input('page',1) - 1) * 5);//
  
    }

    public function export_excel()
	{
		return Excel::download(new TransaksiExport, 'manager.xlsx');
	}


  
    public function create()
    {
        $products = Product::all();
        $users = User::all();
        return view('transaksi.create', compact('products','users','products'));
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'kd_barang'     => 'required',
            'kd_user'       => 'required',
            'jumlah_beli'   => 'required',
            // 'total_harga'   => 'required',
            'tanggal_beli'  => 'required'
        ]);
  
        Transaksi::create($request->all());
  
        return redirect('transaksi')
                        ->with('success','Transaction created successfully.');
    }
  
    public function show($kd_transaksi)
    {
        $transaksi = Transaksi::where('kd_transaksi', $kd_transaksi)->get();
        return view('transaksi.show',compact('transaksi'));
    }
  
    public function edit($kd_transaksi)
    {
       $users = User::all();
       $products = Product::all();
      $transaksi = Transaksi::where('kd_transaksi',$kd_transaksi)->first();
  
        return view('transaksi.edit',compact('transaksi','users','products'));
    }
      public function update(Request $request,$kd_transaksi)
    {
      $transaksi = Transaksi::where('kd_transaksi', $kd_transaksi)->update([
          'kd_transaksi' => $request->kd_transaksi,
          'kd_barang' => $request->kd_barang,
          'kd_user' => $request->kd_user,
          'jumlah_beli' => $request->jumlah_beli,
          'total_harga' => $request->total_harga,
          'tanggal_beli' => $request->tanggal_beli
      ]);
  
        return redirect()->route('transaksi.index')
                        ->with('success','Transaction updated successfully');
    }
  
    public function destroy($kd_transaksi)
    {
        $transaksi = Transaksi::where('kd_transaksi',$kd_transaksi
    );
        $transaksi->delete();
  
        return redirect()->route('transaksi.index')
                        ->with('success','Transaction deleted successfully');
    }
}
