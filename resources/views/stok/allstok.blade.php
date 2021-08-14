@extends('stok.base')

@section('judul')
    <title>Semua Stok &mdash; Warehousing Cashier</title>
@endsection

@section('body')
<div class="card mb-4">
    <div class="card-header">
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Isi Bersih</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Update Terakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Isi Bersih</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Update Terakhir</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($stok as $data)
                    <tr>
                        <td>{{$data->id_barang}}</td>
                        <td>{{$data->nama_barang}}</td>
                        <td>{{$data->jenis}}</td>
                        <td>{{$data->isi}} {{$data->satuan}}</td>
                        <td>{{$data->qty}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->last_update}}</td>
                        <td>Aksi</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
    
@endsection