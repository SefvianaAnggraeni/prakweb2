@extends('frontend.layout.app')

@section('content')
<section id="hero" class="d-flex align-items-center">
  <div class="container d-flex flex-column align-items-center">
    <h1>Sefviana Anggraeni</h1>
    <h2>I am a student at STT Terpadu Nurul Fikri from Depok</h2>
    <a href="{{ url ('frontend/about')}}" class="btn-about">About Me</a>
  </div>
</section>

@endsection