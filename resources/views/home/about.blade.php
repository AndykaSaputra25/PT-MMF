@extends('layouts.main')

@section('content')

<!-- About -->
<div class="container mt-5 mb-5 pb-5">
  <div class="row">
    <a href="https://youtu.be/7Qmhq-UpJsY" target="_blank">
      <img src="assets/img/about.png" alt="about" class="img-fluid">
    </a>      
  </div>
</div>
<!-- End.About -->

<!-- Clients -->
<div class="clients bg mb-5 pt-5 pb-5">
  <div class="container">
    <div class="row text">
      <div class="title-container">
        <h2 class="text-center fw-bold">CLIENTS</h2>
      </div>
      <div class="row text-center">
      @foreach ($clients as $client)
        <div class="col-md-3">
          <img src="{{ asset('image/' . $client->image) }}" class="img-fluid img-brand pt-5 mx-auto" alt="Bali Internasioanl Flight Academy">
        </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
<!-- End.Clients -->

@endsection
