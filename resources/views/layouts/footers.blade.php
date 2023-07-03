<footer>
  <div class="footer-top pt-5">
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-md-4 profile-manag">
          <h2 class="fw-bold">MMF</h3>
          <hr class="line">
          @php
            echo $contact->mmf;
          @endphp
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
          <h2 class="fw-bold pt-4">Contact Us</h2>
          <hr class="line">
          <div class="row">
            <div class="col-md-7">
              @php
                $number1 = implode(' ', str_split($contact->wa_1, 3));
                $number2 = implode(' ', str_split($contact->wa_2, 3));
                $number3 = implode(' ', str_split($contact->wa_3, 3));
              @endphp
              <pre>
<strong class="fs-5">{{ $about->desk_1 }}</strong>
Juanda International Airport
Surabaya - Indonesia

Telp. : +{{ $number1 }} (Marketing)
        +{{ $number2 }} (Sekretariat)
                    
Email : {{ $contact->email_1 }}
        {{ $contact->email_2 }}
                  </pre>
                </div>
                <div class="col-md-5">
                  <pre>
<strong class="fs-4">Jakarta Office</strong>
Gedung Graha Anugerah Lt. 5

Jl. Teluk Betung No.42, Kebon 
Melati - Tanah Abang, Jakarta 
Pusat 10230

                    
Telp. : +{{ $number3 }}
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-down px-5 pt-4">
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="copyright">
            &copy; Copyright <strong>{{ $about->name_1 }}</strong>.
            <p>All Right Reserved <?php echo date('Y'); ?></p>
          </div>
        </div>
        <div class="col-md-6 foot-icon">
          <div class="social-links float-end">
            <a href="https://linkedin.com/company/{{ $contact->linkedin }}" class="mx-2 text-decoration-none" target="_blank">
              <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <a href="https://www.instagram.com/{{ $contact->ig_1 }}" class="mx-2 text-decoration-none" target="_blank">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="mailto:{{ $contact->email_1 }}" class="mx-2 text-decoration-none">
              <i class="far fa-envelope fa-2x"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone={{ $contact->wa_1 }}&text=Halo" class="mx-2 text-decoration-none" target="_blank">
              <i class="fab fa-whatsapp fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="btn-to-top p-3 bg-primary white">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
</a>
  
  
  
      
