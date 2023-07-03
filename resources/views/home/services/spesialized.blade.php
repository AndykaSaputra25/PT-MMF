@extends('layouts.main')

@section('content')

    <!-- Coursel -->
    <div class="coursel pt-5 mb-5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-7 air">
            <h2>Specialized Services</h2><br>
            <P class="text-secondary">Not all aircraft maintenance, repair, and overhaul (MRO) providers are capable of performing specialized services. As an MRO that continuously strives to meet the demands of our domestic and international customers, Merpati Maintenance Facility is always innovating to develop specialized services in our MRO capabilities. Currently, the specialized services that we offer are not limited to Non-Destructive Testing (NDT), Ramp Test, Swing Compass, Sheet & Composite Metal Repair, Cockpit Voice Recorder (CVR) & Flight Data Recorder (FDR) Read Out, Weigh and Balancing, Borescope, Aircraft Painting, Hydrostatic Test, Tail Modification, and Welding. For painting work, our hangar is equipped with dedicated painting facilities and segregated with barriers. This ensures that you can have confidence in us to carry out painting work in our hangar without any hesitation. Note: MRO stands for Maintenance, Repair, and Overhaul. NDT refers to methods of testing that do not damage the material being tested. CVR records audio in the cockpit, while FDR records flight data. Hangar is a facility for aircraft maintenance and repair. Welding is the process of joining materials using heat and/or pressure. NDT, Ramp Test, Swing Compass, Sheet & Composite Metal Repair, Weigh and Balancing, Borescope, Hydrostatic Test, and Tail Modification are specialized services related to aircraft maintenance and repair. Painting involves applying paint to an aircraft for protection and aesthetics.</P>
          </div>
          <div class="col-md-5">
            <div class="header-img">
              <img src="../assets/img/s3.jpg" alt="maintenance plane">
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