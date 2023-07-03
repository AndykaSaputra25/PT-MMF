@extends('layouts.main')

@section('content')

    <!-- Coursel -->
    <div class="coursel pt-5 mb-5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-7 air">
            <h2>Component Services</h2><br>
            <P class="text-secondary">Components play a crucial role in ensuring the airworthiness of an aircraft. Without sufficient supporting factors, the aircraft cannot be authorized to fly. As a result, Merpati Maintenance Facility is prepared to provide assistance and deliver top-quality services tailored to your requirements. We have a comprehensive capability list for maintaining and repairing aircraft components, both for military and civilian aircraft, including B737, F27, F28, F100, CASA 212, CN 235, and other aircraft models listed in our latest capability list. Moreover, Merpati Maintenance Facility is certified by PUSLAIKLAMBANGJAAU for the maintenance of B-737, CN-235, C-295, and CASA-212 aircraft components, as outlined in our capability list.</P>
            <p class="text-secondary">As the aviation industry continues to advance, technology plays a significant role in driving progress, particularly in avionic component repairs such as CVR and FDR, which have transitioned from manual to digital systems. With our extensive experience and knowledge, we are committed to providing assurance and satisfaction to our valued customers. Additionally, our personnel are certified by COMA, ensuring that they possess the necessary skills in their respective fields of expertise. Please note that PUSLAIKLAMBANGJAAU and COMA are Indonesian aviation certifications, and B-737, CN-235, C-295, CASA-212, CVR, and FDR are common aviation acronyms used in the industry.</p>
          </div>
          <div class="col-md-5">
            <div class="header-img">
              <img src="../assets/img/s2.jpg" alt="maintenance plane">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End.Coursel -->

    <!-- MMF -->
    <div class="mmf pt-5 bg pb-5">
      <div class="container">
        <div class="row text">
          <div class="title-container">
            <h2 class="text-center fw-bold">DESCRIPTION</h2>
          </div>
          <div class="accordion pt-5" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  HEAVY MAINTENANCE
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <h4 class="text-center pb-4">Capability Type</h4>
                  <table>
                      <tr>
                        <th>Type</th>
                        <th>Model</th>
                        <th>Description Capabillity</th>
                      </tr>
                      <tr class="bg-info">
                        <td>ATR (Avions de Transport Régional)</td>
                        <td>ATR-42</td>
                        <td>Base Maintenance up to “C” Check, 12 Years, 36000FL</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>ATR-72</td>
                        <td>Base Maintenance up to “C” Check, 12 Years, 36000FL</td>
                      </tr>
                      <tr class="bg-info">
                        <td>Fokker BV</td>
                        <td>F-27 Series</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>F-27 Mk 50</td>
                        <td>Base Maintenance up to 12000 FHRS</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>F-28 Mk 70/100</td>
                        <td>	Base Maintenance up to “15000 FHRS” Check</td>
                      </tr>
                      
                      <tr class="bg-info">
                        <td>The Boeing Company</td>
                        <td>B737-200</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>B737-300</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>B737-400</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>B737-500</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="accordion-item mb-5">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  POWERPLANT
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <h4 class="text-center pb-4">Capability Type</h4>
                  <table>
                      <tr>
                        <th>Type</th>
                        <th>Model</th>
                        <th>Description Capabillity</th>
                      </tr>
                      <tr class="bg-info">
                        <td>ATR (Avions de Transport Régional)</td>
                        <td>ATR-42</td>
                        <td>Base Maintenance up to “C” Check, 12 Years, 36000FL</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>ATR-72</td>
                        <td>Base Maintenance up to “C” Check, 12 Years, 36000FL</td>
                      </tr>
                      <tr class="bg-info">
                        <td>Fokker BV</td>
                        <td>F-27 Series</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>F-27 Mk 50</td>
                        <td>Base Maintenance up to 12000 FHRS</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>F-28 Mk 70/100</td>
                        <td>	Base Maintenance up to “15000 FHRS” Check</td>
                      </tr>
                      
                      <tr class="bg-info">
                        <td>The Boeing Company</td>
                        <td>B737-200</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>B737-300</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>B737-400</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>B737-500</td>
                        <td>Base Maintenance up to “D” Check</td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End.MMF -->    

@endsection