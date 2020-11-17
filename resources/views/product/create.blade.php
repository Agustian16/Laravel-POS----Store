@extends('mas.students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-top:20px;">+ New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('product.index') }}"> Back</a>
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

<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <center>
<div class="jumbotron text-left" style="width: 400px" height="400px">
     <div class="row">
 

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Product:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Name Product">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong>
                <input type="text" name="kd_merek" class="form-control" placeholder="Select Brand">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" class="form-control" placeholder="Gender">
            </div>
        </div> --}}


        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="exampleFormControlSelect1" name="kd_distributor">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1" name="kd_distributor">
              <option>MALE</option>
              <option>FEMALE</option>
            </select>
          </div>

          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Entry:</strong>
                <input type="date" name="tanggal_masuk" class="form-control" placeholder="Date Entry">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="harga_barang" class="form-control" placeholder="Price Product">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="number" name="stok_barang" class="form-control" placeholder="Stock">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Information:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Information Product"></textarea>
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
