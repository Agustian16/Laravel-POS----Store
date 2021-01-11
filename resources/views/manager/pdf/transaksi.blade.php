<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Transaction Report</title>
  </head>
  <body>
    {{-- <img src="/assets/img/clip-report.png" class="bg-report"/> --}}
    <img src="https://img.icons8.com/bubbles/50/000000/cash-register.png"/>
    <a href="{{ route('manager.index') }}">
    <img src="/src/assets/images/back-button.svg" alt="logo" class="back-button" /> </a>
</a>
    <h1>CASHY STORE</h1>
    <style>
        table {
            position: relative;
            left: 1180px;
            top: -10px;
            border: solid black;
        }
        h1 {
            position: relative;
            left: 550px;
            top: -40px;
        }
        img {
            position: relative;
            left: 460px;
            top: 30px;
            height: 80px;
        }
        .bg-report{
            position: relative;
            left: 100px;
            width: 400px;
            height: 300px;
            top: 200px;
        }
        .bg-report2{
            position: relative;
            left: 1050px;
            width: 500px;
            height: 400px;
            top: 200px;
        }
        /* .bg{
            background-image: url("/assets/img/clip-financial-report.png");
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: 600px;
            position: relative;
            height: 500px;
            left: 180px;
            top: -90px;
        } */
        body {
            background-color: rgb(255, 255, 255);
        }
        .side{
            background-image: url("/assets/img/clip-report.png");
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: 600px;
            position: relative;
            height: 500px;
            right: 700px;
        }
        .back-button {
            position: relative;
            left: -40px;
            width: 50px;
            top: -5px;
        }
    </style>
    <div class="bg">
        <div class="side">
            <div class="row">
                <div class="d-flex justify-content-center">
                <table class="table table-bordered table-hover border border-dark" align="center">
                <thead class="thead-dark">
                    <tr class="bg-success">
                        <th scope="col">No</th>
                        <th scope="col">Product</th>
                        <th scope="col">User</th>
                        <th scope="col">Purchase Ammount</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Date of Purchase</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 1 @endphp
                @foreach ($transaksis as $transaksi)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $transaksi->nama_barang }}</td>
                        <td>{{ $transaksi->name }}</td>
                        <td>{{ $transaksi->jumlah_beli }}</td>
                        <td>{{ $transaksi->total_harga }}</td>
                        <td>{{ $transaksi->tanggal_beli }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>