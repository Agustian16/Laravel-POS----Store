<!DOCTYPE html>
<html>
<head>
    <title>Lara Products</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        {{-- Data tables CSS --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body>

    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>
</html>
