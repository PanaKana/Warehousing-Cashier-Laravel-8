@extends('stok.base')

@section('judultab')
    <title>Stocking Home &mdash; Warehousing Cashier</title>
@endsection

@section('upperpage')
    Selamat Datang    
@endsection

@section('body')
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Tanggal Mutasi</th>
                        <th>Status Mutasi</th>
                        <th>No Mutasi</th>
                        <th>Nama Barang</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tanggal Mutasi</th>
                        <th>Status Mutasi</th>
                        <th>No Mutasi</th>
                        <th>Nama Barang</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($mutasibulanan as $data)
                        <tr>
                            <td>{{$data->tanggal}}</td>
                            <td>@if ($data->status == 1)
                                Keluar
                            @else
                                Masuk
                            @endif</td>
                            <td>{{$data->no_mutasi}}</td>
                            <td>{{$data->nama_barang}}</td>
                            <td>{{$data->jenis}}</td>
                            <td>{{$data->isi}} {{$data->nama_satuan}}</td>
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
