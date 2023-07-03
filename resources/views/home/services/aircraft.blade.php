@extends('layouts.main')

@section('content')
    
    <!-- Coursel -->
    <div class="coursel pt-5 mb-5">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-7 air">
              <h2>Aircraft Maintenance</h2><br>
              <P class="text-secondary">Merpati Maintenance Facility is an organization specializing in Maintenance Repair Overhaul (MRO), operating under CASR 145. Our certification by DGCA and IDAA allows us to provide aircraft maintenance services for civil and military aircraft. Additionally, we are certified by CAAP and CAAB to support international aircraft maintenance. Our services include inspection, heavy maintenance, modifications, and Aircraft On Ground (AOG) support, provided by our experienced team.</P>
              <p class="text-secondary">With 3 hangars located in Juanda-Surabaya, Biak, and Manado, we have the capacity to accommodate narrow body jet aircraft, propeller transport, propeller training, business & executive jet, and helicopters as listed in our capability list. Our workshop is equipped with advanced equipment and a Test Cell for Lycoming and Continental engine maintenance.</p>
              <p class="text-secondary">As a leader in the Lower Segments of MRO, we are committed to providing tailored aircraft maintenance solutions to meet your needs. Our approach and experience enable us to deliver effective solutions at competitive costs. We take pride in offering maximum service quality by our skilled team to ensure your aircraft maintenance requirements are met efficiently. In the future, we will continue to add international certifications to our collection, further enhancing our capabilities as a modern MRO. So, you can trust us to provide the best aircraft maintenance services with competitive costs.</p>
            </div>
            <div class="col-md-5">
              <div class="header-img">
                <img src="../assets/img/s1.jpg" alt="maintenance plane">
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