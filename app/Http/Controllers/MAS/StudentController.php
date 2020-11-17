<?php

namespace App\Http\Controllers\MAS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MAS\Student;

class StudentController extends Controller
{
    public function index()
  {
    $students = Student::latest()->paginate(5);


   return view('mas.students.index',compact('students'))
       ->with('i', (request()->input('page',1) - 1) * 5);//

  }

  public function create()
  {
      return view('mas.students.create');
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
          'nis' => 'required',
          'name' => 'required',
          'birth_date' => 'required',
          'gender' => 'required',
          'class_id' => 'required',
          'phone' => 'required',
          'address' => 'required',
      ]);

      Student::create($request->all());

      return redirect('mas/students')
                      ->with('success','Student created successfully.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show($nis)
  {
      $student = Student::where('nis', $nis)->get();
      return view('mas.students.show',compact('student'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function edit($nis)
  {
    $student = Student::where('nis',$nis)->first();

      return view('mas.students.edit',compact('student'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request,$nis)
  {
    $student = Student::where('nis', $nis)->update([
        'nis' => $request->nis,
        'name' => $request->name,
        'birth_date' => $request->birth_date,
        'gender' => $request->gender,
        'class_id'=> $request->class_id,
        'phone' => $request->phone,
        'address' => $request->address
    ]);

      return redirect()->route('students.index')
                      ->with('success','Student updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function destroy($nis)
  {
      $student = Student::where('nis',$nis);
      $student->delete();

      return redirect()->route('students.index')
                      ->with('success','Student deleted successfully');
  }
//   public function dash() {
//     return view('welcome');
// }

}

