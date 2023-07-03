@extends('layouts.main')

@section('content')

<div class="contact mt-5 mb-3 bg pt-5 pb-5">
  <div class="container text pt-5">
    <div class="card border-0 shadow text-shadow-2">
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2>{{ $about->name_1 }}</h2>
              <h4 class="pt-2 pb-2">{{ $about->desk_1 }}</h4>
              <hr>
              <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
              <h4 class="fw-bolder">Location</h4>
              <p class="ms-5">{{ $about->alamat_1 }}</p>
              <br>
              <i class="fa fa-envelope fa-2x primary float-start me-4"></i>
              <h4 class="fw-bolder">Email</h4>
              <p class="ms-5">{{ $contact->email_1 }}</p>
              <br>
              <i class="fa fa-phone-alt fa-2x primary float-start me-4"></i>
              <h4 class="fw-bolder">Phone</h4>
              @php
                $number1 = implode(' ', str_split($contact->wa_1, 3));
              @endphp
              <p class="ms-5">+{{ $number1 }}</p>
            </div>
            <div class="col-md-1"></div>
              <div class="col-md-7">
                <div class="maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.5085532771973!2d112.765996269736!3d-7.38067332356022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e503c2d9bc91%3A0x12a131326afc5bc7!2sMerpati%20Maintenance%20Facility!5e0!3m2!1sid!2sid!4v1684224359756!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5 mb-5 text">
      <div class="card border-0 shadow text-shadow-2">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>{{ $about->name_2 }}</h2>
                <h4 class="pt-2 pb-2">{{ $about->desk_2 }}</h4>
                <hr>
                <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                <h4 class="fw-bolder">Location</h4>
                <p class="ms-5">{{ $about->alamat_2 }}</p>
                <br>
                <i class="fa fa-envelope fa-2x primary float-start me-4"></i>
                <h4 class="fw-bolder">Email</h4>
                <p class="ms-5">{{ $contact->email_3 }}</p>
                <br>
                <i class="fa fa-phone-alt fa-2x primary float-start me-4"></i>
                <h4 class="fw-bolder">Phone</h4>
                @php
                  $number3 = implode(' ', str_split($contact->wa_3, 3));
                @endphp
                <p class="ms-5">+{{ $number3 }}</p>
              </div>
              <div class="col-md-1"></div>
                <div class="col-md-7">
                  <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.015907391572!2d106.821295!3d-6.196512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421d13a88a5%3A0xbadbf38fed9995d6!2sJl.%20Teluk%20Betung%20No.42%2C%20RT.4%2FRW.1%2C%20Kb.%20Melati%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010230!5e0!3m2!1sid!2sid!4v1685652681288!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End.Contact -->

    <!-- MMF.Location -->
    <div class="hangar mt-5 mb-5 pt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">MMF LOCATION</h2>
        </div>
        <div class="row text-center">
          @foreach ($location as $locations)
            <div class="col-md-4" data-aos="fade-up">
              <a href="{{ $locations->description }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('image/' . $locations->image) }}" class="img-fluid pt-5 mx-auto" alt={{ $locations->nama }}>
              </a>
              <span class="fs-5 fw-bolder">{{ $locations->nama }}</span>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- End.MMF.Location -->
    
@endsection