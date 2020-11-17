@extends('mas.students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-top:20px;"> Show Student </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
        @foreach ($student as $a )
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong>Nis:</strong>
                    {{ $a->nis }}
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                     <strong>Name:</strong>
                      {{ $a->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <strong>Birth Date:</strong>
                     {{ $a->birth_date }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Gender:</strong>
                    {{ $a->gender }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Class ID:</strong>
                     {{ $a->class_id }}
                 </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    {{ $a->phone }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $a->address }}
                </div>
            </div>
        </div>
    </div>
   @endforeach
@endsection
