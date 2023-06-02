@include('frontend.layout.top')


<div id="hero_content">
<main>
<div class="container d-flex flex-column align-items-center">
@yield('content')
</div>
</main>
</div>
</div>
@include('frontend.layout.bottom')