<?php

namespace App\Http\Controllers\MAS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MAS\Classes;

class ClassController extends Controller
{
    public function index()
    {
      $class = Classes::latest()->paginate(5);


     return view('mas.class.index',compact('class'))
         ->with('i', (request()->input('page',1) - 1) * 5);//

    }

    public function create()
    {
        return view('mas.class.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Classes::create($request->all());

        return redirect('mas/class')
                        ->with('success','Class created successfully.');
    }
    public function show($id)
    {
        $class = Classes::where('id', $id)->get();
        return view('mas.class.show',compact('class'));
    }

    public function edit($id)
    {
      $class = Classes::where('id',$id)->first();

        return view('mas.class.edit',compact('class'));
    }

    public function update(Request $request,$id)
    {
        $class = Classes::find($id);
        $class->name = $request->name;
        $class->update();

        return redirect()->route('class.index')
                        ->with('success','Class updated successfully');
    }

    public function destroy($id)
    {
        $class = Classes::where('id',$id);
        $class->delete();

        return redirect()->route('class.index')
                        ->with('success','Class deleted successfully');
    }
}
