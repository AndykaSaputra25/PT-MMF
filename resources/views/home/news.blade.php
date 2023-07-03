@extends('layouts.main')

@section('content')

<div class="news pt-5">   
  @foreach ($news as $key => $berita)
  <div class="@if($key % 2 == 1) bg @endif">
    <div class="container pt-3">
      <div class="row pb-5">
        <div class="row @if($key % 2 == 1) text @endif">
          <h3 class="text-center pt-5">{{ $berita->name }}</h3>
          <hr>
          <div class="col-md-5 pt-3">
            <img src="{{ asset('image/' . $berita->image) }}" alt="{{ $berita->name }}" class="news-img pe-3">
          </div>
          <div class="col-md-7 pt-3 profile-manag">
            <strong>{{ $berita->date }}</strong>
            @php
              $descriptionSentences = explode('.', $berita->description);
              $description = '';
              for ($i = 0; $i < 4; $i++) {
                if (isset($descriptionSentences[$i])) {
                  $description .= $descriptionSentences[$i] . '. ';
                }
              }
              $description = str_replace('  ', ' ', $description);
            @endphp
            <p class="pt-3">{{ $description }}</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal{{ $key }}">
              Read More
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="newsModal{{ $key }}" tabindex="-1" aria-labelledby="newsModalLabel{{ $key }}" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="newsModalLabel{{ $key }}">{{ $berita->name }}</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <img src="{{ asset('image/' . $berita->image) }}" alt="{{ $berita->name }}" class="news-img pb-3">
                <strong>{{ $berita->date }}</strong>
              </div>
              <div class="col-md-7 profile-manag">
                <p>{{ $berita->description }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection

