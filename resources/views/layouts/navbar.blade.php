<!-- Navabar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow shadow-sm py-3">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="{{ asset('image/' . $about->logo) }}" alt="MMF" class="img-logo">
    </a>
    <span class="navbar-text fst-italic fs-6">
      Trusted Reliable <br>
      MRO Partner
    </span>
    <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fw-bolder  {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link fw-bolder dropdown-toggle {{ request()->is('about') || request()->is('management') || request()->is('certificate') ? 'active' : '' }}
            " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item {{ request()->is('about') ? 'active' : '' }}" href="/about">About Us</a></li>
            <li><a class="dropdown-item {{ request()->is('management') ? 'active' : '' }}" href="/management">Management</a></li>
            <li><a class="dropdown-item {{ request()->is('certificate') ? 'active' : '' }}" href="/certificate">Certificate</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder {{ request()->is('services') || request()->is('services/aircraft') || request()->is('services/component') || request()->is('services/spesialized') || request()->is('services/calibration') ? 'active' : '' }}" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder {{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder {{ request()->is('news') ? 'active' : '' }}" href="/news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-sm navbar-light pt-5 mt-5 nav-bottom">
  <div class="container icon-nav">
    <div class="social-links float-end">
      <a href="https://linkedin.com/company/{{ $contact->linkedin }}" class="mx-2 text-decoration-none nav-small" target="_blank">
        <i class="fab fa-linkedin fa-1x pt-3"></i>
      </a>
      <a href="https://www.instagram.com/{{ $contact->ig_1 }}" class="mx-2 text-decoration-none nav-small" target="_blank">
        <i class="fab fa-instagram fa-1x pt-3"></i>
      </a>
      <a href="mailto:{{ $contact->email_1 }}" class="mx-2 text-decoration-none nav-small">
        <i class="far fa-envelope fa-1x pt-3"></i>
      </a>
      <span class="trans nav-small">
        <a href="" class="ms-3 text-decoration-none">IN</a>
        <span>|</span>
        <a href="" class="text-decoration-none">EN</a>
      </span>
    </div>
    <div class="social-links float-end">
      <a href="mailto:{{ $contact->email_1 }}" class="mx-3 text-decoration-none fs-6 nav-small">
        <i class="far fa-envelope fa-1x pt-3"></i>
        {{ $contact->email_1 }}
      </a>
      <a href="https://api.whatsapp.com/send?phone={{ $contact->wa_1 }}&text=Halo" class="mx-3 text-decoration-none fs-6 nav-small" target="_blank">
        @php
          $number1 = implode(' ', str_split($contact->wa_1, 3));
        @endphp
        <i class="fab fa-whatsapp fa-1x pt-3"></i>
        +{{ $number1 }}
      </a>
    </div>
  </div>
</nav>
<!-- End.Navbar -->