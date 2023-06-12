@extends('admin.layout.app')
{{-- orang tua dari setiap halaaman --}}

{{-- extend itu perintah agar kita dapat menggunakan
    semua code yang ada di dalam file yang di extends --}}

{{-- halaman dashboard adalah anak dari si parent/orang tua --}}

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Pesanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pesanan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama_pemesan</th>
                            <th>No_hp</th>
                            <th>Email</th>
                            <th>Jumlah_pemesan</th>
                            <th>Deskripsi</th>
                            <th>Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pesanan as $pes)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $pes->tanggal }}</td>
                                <td>{{ $pes->nama_pemesan }}</td>
                                <td>{{ $pes->no_hp }}</td>
                                <td>{{ $pes->email }}</td>
                                <td>{{ $pes->jumlah_pesanan }}</td>
                                <td>{{ $pes->deskripsi }}</td>
                                <td>{{ $pes->nama_produk }}</td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
