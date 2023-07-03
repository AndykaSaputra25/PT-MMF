@extends('layouts.main')

@section('content')

<div class="teams py-5">
  <div class="container">
    <div class="title-container">
      <h2 class="text-center fw-bold">MANAGEMENT</h2>
    </div>
    <div class="row manag mt-5">
    @foreach ($managements->take(2) as $management)
      <div class="col-md-6 text-center">
        <img src="{{ asset('image/' . $management->image) }}" alt="{{ $management->name }}">
        <h3 class="pt-3">{{ $management->name }}</h3>
        <em>{{ $management->position }}</em>
        <div class="accordion p-3" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Profile
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
              	<p class="profile-manag">
                  {{ $management->description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div> 

  <div class="row manag mt-5">
  @foreach ($managements->skip(2) as $management)
    <div class="col-md-4 text-center">
      <img src="{{ asset('image/' . $management->image) }}" alt="{{ $management->name }}">
      <h3 class="pt-3">{{ $management->name }}</h3>
      <em>{{ $management->position }}</em>
      <div class="accordion p-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
        	<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Profile
          </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <p class="profile-manag">
                {{ $management->description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

@endsection