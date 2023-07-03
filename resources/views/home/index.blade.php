@extends('layouts.main')

@section('content')

    <!-- Coursel -->
    <div class="coursel pt-5 mb-5">
      <div class="container">
        <div class="row d-flex align-items-center">
        @foreach ($sliders as $slider)
          @if ($slider->title === 'MRO')
            <div class="col-md-4 pb-5">
              <h1>{{ $about->name_1 }}</h1><br>
              <p class="text-secondary">{{ $slider->description }}</p>
              <strong>Trusted Reliable MRO Partner</strong>
            </div>
            <div class="col-md-8">
              <div class="header-img">
                <img src="{{ asset('image/' . $slider->image) }}" alt="maintenance plane">
              </div>
            </div>
          @endif
        @endforeach
        </div>
      </div>
    </div>
    <!-- End.Coursel -->

    <!-- MMF -->
    <div class="mmf pt-5 bg pb-5">
      <div class="container">
        <div class="row text">
          <div class="title-container">
            <h2 class="text-center fw-bold">MEET MMF</h2>
          </div>
          <div class="text-center mt-4 fs-5">
            @php
              echo $about->meet;
            @endphp
          </div>
        </div>
      </div>
    </div>
    <!-- End.MMF --> 

    <!-- Services -->
    <div class="services pt-5 mb-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">SERVICES</h2>
        </div>
        <div class="row header-img">
          @foreach ($sliders as $slider)
            @if ($slider->title === 'service')
              <img src="{{ asset('image/' . $slider->image) }}" alt="Services">
            @endif
          @endforeach
        </div>
      </div>
    </div>
    <!-- End.Services -->

    <!-- AboutUs -->
    <div class="about-us pt-5 pb-5 bg">
      <div class="container">
        <div class="row text">
          <div class="title-container">
            <h2 class="text-center fw-bold">Revolutionizing Aircraft Maintenance</h2>
          </div>
          <p class="text-center pt-2">Certified and Experienced MRO</p>
          
          <div class="row row-cols-1 mx-auto row-cols-md-3 g-4">
            @foreach ($sliders as $slider)
              @if ($slider->title === 'Capability' || $slider->title === 'Experience' || $slider->title === 'Certification')
                <div class="col mom-card">
                  <div class="card h-100 three-card">
                    <img src="{{ asset('image/' . $slider->image) }}" alt="{{ $slider->title }}">
                    <div class="card-body">
                      <h5 class="card-title text-center">{{ $slider->title }}</h5>
                      <p class="card-text">{{ $slider->description }}</p>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
            
        </div>
      </div>
    </div>
    <!-- End.AboutUs -->

    <!-- WeDo -->
    <div class="we-do pt-5 mb-5">
      <div class="container-fluid">
        <div class="grid-container">
        @foreach ($sliders as $slider)
          @if ($slider->title === 'do')
            <div class="work-image">
              <img src="{{ asset('image/' . $slider->image) }}" alt="aircraft">
            </div>
            <div class="work p-5">
              <h4>What we do</h4>
              <h1>A comprehensive suite of services</h1>
              <h6 class="pb-3">{{ $slider->description }}</h6>
              <a href="/services" class="btn btn-primary">Look at</a>
            </div>
          @endif
        @endforeach
        </div>
      </div>
    </div>
    <!-- End.WeDo -->
    
@endsection