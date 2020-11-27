<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\Brand;

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
  
    public function show($kd_merek)
    {
        $brand = Brand::where('kd_merek',$kd_merek)->get();
        return view('brand.show',compact('brand'));
    }
  
    public function edit($kd_merek)
    {
      $brand = Brand::where('kd_merek',$kd_merek)->first();
  
        return view('brand.edit',compact('brand'));
    }
  
    public function update(Request $request,$kd_merek)
    {
      $brand = Brand::where('kd_merek', $kd_merek)->update([
          'kd_merek' => $request->kd_merek,
          'merek' => $request->merek
      ]);
  
        return redirect()->route('brand.index')
                        ->with('success','Brand updated successfully');
    }
  
    public function destroy($kd_merek)
    {
        $brand = Brand::where('kd_merek',$kd_merek);
        $brand->delete();
  
        return redirect()->route('brand.index')
                        ->with('success','Brand deleted successfully');
    }  
  }


