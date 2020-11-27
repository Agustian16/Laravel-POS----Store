@extends('layouts.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-top:20px;">Edit Distributor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('distributor.index') }}"> Back</a>
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


    <form action="{{ route('distributor.update', $distributor->kd_distributor) }}" method="POST">
        @csrf
        @method('PUT')

        <center>
        <div class="jumbotron text-left" style="width: 400px" height="400px">

         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Distributor:</strong>
                <input type="number" name="kd_distributor" class="form-control" placeholder="ID Distributor" disabled value="{{ $distributor->kd_distributor }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Distributor:</strong>
                <input type="text" name="nama_distributor" class="form-control" placeholder="Name Distributor"  value="{{ $distributor->nama_distributor }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Address">{{ $distributor->alamat }}</textarea>
            </div>
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="number" name="no_telp" class="form-control" placeholder="Phone Number" value="{{ $distributor->no_telp }}">
            </div>
        </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</center>
</form>
@endsection
