@extends('mas.students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top:20px;" href="{{ route('brand.index') }}"> Back</a>
            </div>
        </div>
    </div>
        @foreach ($brand as $p )
    <div class="container">
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5>Show Brand</h5></div>
            <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong>ID Brand:</strong>
                    {{ $p->kd_merek }}
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                     <strong>Name:</strong>
                      {{ $p->merek }}
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
   @endforeach
@endsection
