<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
      $brands = Brand::latest()->paginate(5);
  
  
     return view('brand.index',compact('brands'))
         ->with('i', (request()->input('page',1) - 1) * 5);//
  
    }
  
    public function create()
    {
        return view('brand.create');
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

            // 'kd_merek' => 'required',
            'merek' => 'required'
        ]);
  
        Brand::create($request->all());
  
        return redirect('brand')
                        ->with('success','Brand created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($kd_merek)
    {
        $brand = Brand::where('kd_merek',$kd_merek)->get();
        return view('brand.show',compact('brand'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_merek)
    {
      $brand = Brand::where('kd_merek',$kd_merek)->first();
  
        return view('brand.edit',compact('brand'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$kd_merek)
    {
      $brand = Brand::where('kd_merek', $kd_merek)->update([
          'kd_merek' => $request->kd_merek,
          'merek' => $request->merek
      ]);
  
        return redirect()->route('brand.index')
                        ->with('success','Brand updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_merek)
    {
        $brand = Brand::where('kd_merek',$kd_merek);
        $brand->delete();
  
        return redirect()->route('brand.index')
                        ->with('success','Brand deleted successfully');
    }  
  }


