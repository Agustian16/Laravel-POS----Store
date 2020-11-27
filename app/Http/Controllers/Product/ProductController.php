<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
class ProductController extends Controller
{
    public function index()
    {

     $products = Product::all();
    //  $products->load('kd_merek');
     
     $products = Product::latest()->paginate(5);
     return view('product.index',compact('products'))
         ->with('i', (request()->input('page',1) - 1) * 5);//
  
    }
  
    public function create()
    {
        $data_brands = Brand::all();

        
        return view('product.create');
        return view('product.create', compact('data_brands'));
        
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            // 'kd_merek' => 'required',
            'kd_distributor' => 'required',
            'tanggal_masuk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'keterangan' => 'required',
        ]);
  
        Product::create($request->all());
  
        return redirect('product')
                        ->with('success','Product created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($kd_barang)
    {
        $product = Product::where('kd_barang',$kd_barang)->get();
        return view('product.show',compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_barang)
    {
      $product = Product::where('kd_barang',$kd_barang)->first();
      $brand = Brand::all();
  
        return view('product.edit',compact('product','brand'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$kd_barang)
    {
      $product = Product::where('kd_barang', $kd_barang)->update([
          'kd_barang' => $request->kd_barang,
          'nama_barang' => $request->nama_barang,
          'kd_merek' => $request->kd_merek,
          'kd_distributor' => $request->kd_distributor,
          'tanggal_masuk'=> $request->tanggal_masuk,
          'harga_barang' => $request->harga_barang,
          'stok_barang' => $request->stok_barang,
          'keterangan' => $request->keterangan
      ]);
  
        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_barang)
    {
        $product = Product::where('kd_barang',$kd_barang);
        $product->delete();
  
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }
  //   public function dash() {
  //     return view('welcome');
  // }
  
  }
