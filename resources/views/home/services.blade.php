@extends('layouts.main')

@section('content')

<div class="services py-5">
  <div class="container">
    <div class="title-container text-center">
      <h2 class="fw-bold">SERVICES</h2>
    </div>
    <p class="text-center mt-4">
      {{ $about->service }}
    </p>
  </div>
  <div class="card bg mt-5 pt-2 pb-5">
  @foreach ($services as $service)
    <div class="container pt-2 mt-5">
      <div class="card text">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('image/' . $service->image) }}" class="img-fluid p-3" alt="{{ $service->title }}">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h2 class="card-title">{{ $service->title }}</h1>
              <div class="card-text profile-manag text-secondary fs-6">
                @php
                  echo $service->description;
                @endphp
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection