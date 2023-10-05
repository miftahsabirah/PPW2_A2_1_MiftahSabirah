@include('header')

@extends('footer')

@section('table')

<table border="1px" class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Suplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
            <tr>
                <td>{{ ++$no}}</td>
                <td>{{ $barang->nama_barang}}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{ $barang->stok}}</td>
                <td>{{ $barang->id_suplier}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

