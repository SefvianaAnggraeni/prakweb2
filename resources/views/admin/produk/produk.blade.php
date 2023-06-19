@extends('admin.layout.app')

{{--orangtua/parent dari setiap halaman--}}

{{-- extends itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extends --}}

{{--halaman dashboard adalah anak dari si parent--}}

@section('content')
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <a href="{{ url('admin/produk/create/') }}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
     Data Produk
</div>
<div class="card-body" style="text-align: center;">
    <table id="datatablesSimple" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Minimal Stok</th>
                <th>Deskripi</th>
                <th>Kategori Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @php $no = 1; @endphp
        @foreach($produk as $p)
            <tr>
                <td>{{$no}}</td>
                <td>{{$p->kode}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->harga_jual}}</td>
                <td>{{$p->harga_beli}}</td>
                <td>{{$p->stok}}</td>
                <td>{{$p->min_stok}}</td>
                <td>{{$p->deskripsi}}</td>
                <td>{{$p->nama_kategori}}</td>
                <!--- nama_kategori diambil dari join yang ada di controller produk yang
                sudah dibuatkan join -->
                <td><a href="{{ url('admin/produk/edit/'. $p->id) }}" class="btn btn-success">Edit</a></td>
                <td><a href="{{ url('admin/produk/delete/'. $p->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @php $no++
        @endphp
        @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection