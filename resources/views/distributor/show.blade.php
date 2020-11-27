@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-top:20px;"> Show Distributor </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('distributor.index') }}"> Back</a>
            </div>
        </div>
    </div>
        @foreach ($distributor as $a )
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong>Nis:</strong>
                    {{ $a->kd_distributor }}
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                     <strong>Name:</strong>
                      {{ $a->nama_distributor }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <strong>Birth Date:</strong>
                     {{ $a->alamat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Gender:</strong>
                    {{ $a->no_telp }}
                </div>
            </div>
        </div>
    </div>
   @endforeach
@endsection
