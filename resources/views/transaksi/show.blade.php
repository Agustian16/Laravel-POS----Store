@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-top:20px;"> Show Trasanction </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('transaksi.index') }}"> Back</a>
            </div>
        </div>
    </div>
        @foreach ($transaksi as $a )
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong>ID Transaction:</strong>
                    {{ $a->kd_transaksi }}
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                     <strong>Product:</strong>
                      {{ $a->kd_barang }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <strong>User:</strong>
                     {{ $a->kd_user }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Purchase Ammount:</strong>
                    {{ $a->jumlah_beli }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total of Purchase:</strong>
                   {{ $a->total_harga }}
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Purchase:</strong>
               {{ $a->tanggal_beli }}
           </div>
       </div>
        </div>
    </div>
   @endforeach
@endsection
