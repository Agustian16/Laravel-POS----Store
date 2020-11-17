@extends('mas.students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-top:20px;">+ New Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('mas.students.store') }}" method="POST">
    @csrf
    <center>
<div class="jumbotron text-left" style="width: 400px" height="400px">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis:</strong>
                <input type="number" name="nis" class="form-control" placeholder="Nis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birth Date:</strong>
                <input type="date" name="birth_date" class="form-control" placeholder="Birth Date">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" class="form-control" placeholder="Gender">
            </div>
        </div> --}}


        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="exampleFormControlSelect1" name="gender">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1" name="gender">
              <option>MALE</option>
              <option>FEMALE</option>
            </select>
          </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Class ID:</strong>
                <input type="text" name="class_id" class="form-control" placeholder="Class ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="number" name="phone" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</center>
</form>
@endsection
