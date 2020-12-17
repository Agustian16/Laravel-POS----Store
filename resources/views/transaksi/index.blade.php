@extends('layouts.layout')
@include('transaksi.layout')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 <body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style=font-family: 'Balsamiq Sans', cursive;> Transaction Data </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" style="margin-top:20px;" href="{{ route('transaksi.create') }}"><i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
<div class="container">
    <table class="table table-bordered table-responsive-lg hover" style="margin-top:5px;" id="mytable">
        <thead>
        <tr class="bg-info">
            <th>No.</th>
            {{-- <th>ID</th> --}}
            <th>Product</th>
            <th>User</th>
            <th>Purchase Ammount</th>
            <th>Total Price</th>
            <th>Date of Purchase</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksis as $transaksi)
        <tr>
            <td>{{ ++$i }}</td>
            {{-- <td>{{ $transaksi->kd_transaksi }}</td> --}}
            <td>{{ $transaksi->kd_barang }}</td>
            <td>{{ $transaksi->kd_user }}</td>
            <td>{{ $transaksi->jumlah_beli }}</td>
            <td>{{ $transaksi->total_harga }}</td>
            <td>{{ $transaksi->tanggal_beli }}</td>
            <td>
                <form action="{{ route('transaksi.destroy',$transaksi->kd_transaksi) }}" method="POST">
                    <a href="{{ route('transaksi.show', $transaksi->kd_transaksi) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg mr-2"></i>
                    </a>
                    <a href="{{ route('transaksi.edit', $transaksi->kd_transaksi) }}" title="edit">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" style="border: none; background-color:transparent;" class="btn btn-danger" onclick="return confirm('Are You Sure?..')">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
{!! $transaksis->links() !!}
@endsection
</div>
</body>
