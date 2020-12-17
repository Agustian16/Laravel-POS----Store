@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-top:20px;">+ New Transaction</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('transaksi.index') }}"> Back</a>
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

<form action="{{ route('transaksi.store') }}" method="POST">
    @csrf
    <center>
<div class="jumbotron text-left" style="width: 400px" height="400px">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="exampleFormControlSelect1" name="kd_barang">Product:</label>
            <select class="form-control" id="exampleFormControlSelect1" name="kd_barang">
                @foreach ($products as $t)
                <option value="{{ $t->kd_barang }}">{{ $t->nama_barang }}</option>
                @endforeach
            </select>
          </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="exampleFormControlSelect1" name="kd_user">User:</label>
            <select class="form-control" id="exampleFormControlSelect1" name="kd_user">
                @foreach ($users as $u)
                <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach
            </select>
          </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Purchase amount:</strong>
                <input type="number" name="jumlah_beli" class="form-control" placeholder="Purchase Ammount">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Price:</strong>
                @foreach ($products as $p )
                <input type="number" name="total_harga" class="form-control" placeholder="Total Price" disabled>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Purchase:</strong>
                <input type="date" name="tanggal_beli" class="form-control" placeholder="Date of Purchase">
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
