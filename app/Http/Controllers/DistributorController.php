<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    public function index()
    {
      $distributors = Distributor::latest()->paginate(5);
  
  
     return view('distributor.index',compact('distributors'))
         ->with('i', (request()->input('page',1) - 1) * 5);//
  
    }
  
    public function create()
    {
        return view('distributor.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'nama_distributor'  => 'required',
            'alamat'            => 'required',
            'no_telp'           => 'required'
        ]);
  
        Distributor::create($request->all());
  
        return redirect('distributor')
                        ->with('success','Distributor created successfully.');
    }
  
    public function show($kd_distributor)
    {
        $distributor = Distributor::where('kd_distributor', $kd_distributor)->get();
        return view('distributor.show',compact('distributor'));
    }
  
    public function edit($kd_distributor)
    {
      $distributor = Distributor::where('kd_distributor',$kd_distributor)->first();
  
        return view('distributor.edit',compact('distributor'));
    }
      public function update(Request $request,$kd_distributor)
    {
      $distributor = Distributor::where('kd_distributor', $kd_distributor)->update([
          'kd_distributor' => $request->kd_distributor,
          'nama_distributor' => $request->nama_distributor,
          'alamat' => $request->alamat,
          'no_telp' => $request->no_telp
      ]);
  
        return redirect()->route('distributor.index')
                        ->with('success','distributor updated successfully');
    }
  
    public function destroy($kd_distributor)
    {
        $distributor = Distributor::where('kd_distributor',$kd_distributor
    );
        $distributor->delete();
  
        return redirect()->route('distributor.index')
                        ->with('success','distributor deleted successfully');
    }
 
 
  
  }
