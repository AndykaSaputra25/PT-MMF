@extends('layouts.main')

@section('content')

<div class="sertifikat mt-5">
  <div class="container-fluid">
    <div class="row bg p-5">
      <div class="title-container text">
        <h2 class="text-center fw-bold">CERTIFICATE</h2>
      </div>
      <div class="row mt-4 text">
        <div class="col-md-12 d-flex justify-content-center">
          <ul class="list-unstyled d-flex portfolio-filter">
            <li data-filter="*" class="py-2 px-4 filter-active text-white">All</li>
            <li data-filter=".ISO" class="py-2 px-4">ISO</li>
            <li data-filter=".CAAP" class="py-2 px-4">CAAP</li>
            <li data-filter=".KAN" class="py-2 px-4">KAN</li>
            <li data-filter=".LAMBANGJA" class="py-2 px-4">LAMBANGJA</li>
            <li data-filter=".ART" class="py-2 px-4">ART</li>
            <li data-filter=".AMO" class="py-2 px-4">AMO</li>
          </ul>
        </div>
      </div>
    <div class="row mb-5">
      <div class="masonry portfolio-container p-4">
        <div class="masonry-sizer"></div>
        @foreach ($certificate as $certif)
          <div class="masonry-item m-2 portfolio-item {{ $certif->description }}">
            <img src="{{ asset('image/' . $certif->image) }}" alt="{{ $certif->title }}" class="img-fluid">
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection