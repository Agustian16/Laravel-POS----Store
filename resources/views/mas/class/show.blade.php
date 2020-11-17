@extends('mas.class.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-top:20px;"> Show Class </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('class.index') }}"> Back</a>
            </div>
        </div>
    </div>
        @foreach ($class as $a )
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                     <strong>Name:</strong>
                      {{ $a->name }}
                </div>
            </div>
        </div>
    </div>
   @endforeach
@endsection
