@extends('home/layout/main')
@section('konten')
<div class="main">
    <section class="module bg-dark-60 gallery-page-header parallax-bg" data-background="/front/images/gallery_bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Gallery</h2>
            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
          </div>
        </div>
      </div>
    </section>
    <section class="module">
      <div class="container">
        @if ($gallery->count())
        <div class="row multi-columns-row">
        @foreach ($gallery as $galeri)
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-item">
              <div class="gallery-image"><a class="gallery" href="{{ url('uploud/gallery').'/'.$galeri->image }}" title="{{ $galeri->title }}"><img src="{{ url('uploud/gallery').'/'.$galeri->image }}"/>
                  <div class="gallery-caption">
                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                  </div></a>
             </div>
            </div>
          </div>
        @endforeach
    </div>
    <div class="pagination font-alt">
    {{ $gallery->links() }}
    </div>
        @else
            <h3 class="text-center text-danger">No gallery found!</h3>
        @endif
      </div>
    </section>
</main>
@include('home/layout/footer')
@endsection