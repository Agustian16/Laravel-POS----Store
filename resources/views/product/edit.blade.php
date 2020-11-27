@extends('layouts.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-top:20px;">Edit Product</h2>
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


    <form action="{{ route('product.update', $product->kd_barang) }}" method="POST">
        @csrf
        @method('PUT')

        <center>
        <div class="jumbotron text-left" style="width: 400px" height="400px">

         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Product:</strong>
                <input type="number" name="nis" class="form-control" placeholder="Nis" value="{{ $product->kd_barang }}" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Name Product"  value="{{ $product->nama_barang }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong>
                <input type="text" name="kd_merek" class="form-control" placeholder="Brand" value="{{ $product->kd_merek }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Distributor:</strong>
                <input type="text" name="kd_distributor" class="form-control" placeholder="Distributor" value="{{ $product->kd_distributor }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Entry:</strong>
                <input type="date" name="tanggal_masuk" class="form-control" placeholder="Date Entry" value="{{ $product->tanggal_masuk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="harga_barang" class="form-control" placeholder="Price" value="{{ $product->harga_barang }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="number" name="stok_barang" class="form-control" placeholder="Stock" value="{{ $product->stok_barang }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Information:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Information">{{ $product->keterangan }}</textarea>
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
