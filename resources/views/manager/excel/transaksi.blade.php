<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Product</th>
            <th>User</th>
            <th>Purchase Ammount</th>
            <th>Total Price</th>
            <th>Date of Purchase</th>
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