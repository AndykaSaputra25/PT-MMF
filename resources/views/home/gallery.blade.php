@extends('layouts.main')

@section('content')
  <div class="portfolio mt-5 bg pt-5 pb-5">
    <div class="container text">
      <div class="title-container">
        <h2 class="text-center fw-bold">GALLERY</h2>
      </div>
      <div class="row mt-5 mb-5">
        <div class="masonry portfolio-container ps-4">
          <div class="masonry-sizer"></div>
          @foreach ($gallery as $galeri)
            <div class="masonry-item m-2 portfolio-item">
              <img src="{{ asset('image/' . $galeri->image) }}" alt="{{ $galeri->title }}" class="img-fluid img-gallery">
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection



