@extends('frontend.layout.app')

{{--orangtua/parent dari setiap halaman--}}

{{-- extends itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extends --}}

{{--halaman dashboard adalah anak dari si parent--}}

@section('content')
<section id="hero" class="d-flex align-items-center">
  <div class="container d-flex flex-column align-items-center">
    <h3>About</h3>
    <p>Hello, My name is Sefviana Anggraeni. You can call me rae. I am a person who is friendly and easy to
    work with inside and outside the team and nice to meet you.</p>
    <img src="{{ asset ('front/assets/img/pribadi_blob.jpeg')}}" class="rounded" width="150px" alt="">
    <br>
    <ul class="list-unstyled">
        <li><i class="bi bi-rounded-right"></i> <strong>Nama :</strong> Sefviana Anggraeni</li>
        <li><i class="bi bi-rounded-right"></i> <strong>Nim :</strong> 0110122092</li>
        <li><i class="bi bi-rounded-right"></i> <strong>Tanggal Lahir :</strong> 29 April 2003</li>
        <li><i class="bi bi-rounded-right"></i> <strong>Github :</strong> <a href="https://github.com/SefvianaAnggraeni">SefvianaAnggraeni</a> </li>
        <li><i class="bi bi-rounded-right"></i> <strong>Instagram :</strong> <a href="https://www.instagram.com/sefviananggrn/">@sefviananggrn</a> </li>
    </ul>
  </div>
</section>

@endsection