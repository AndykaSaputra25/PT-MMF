@extends('layouts.main')

@section('content')

    <!-- Coursel -->
    <div class="coursel pt-5 mb-5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-7 air">
            <h2>Calibration Services</h2><br>
            <P class="text-secondary">Calibration is an essential process that verifies the compliance of a measuring instrument with its design and functional specifications. By conducting calibration, we can determine the deviation value of the measuring instrument and ensure that it aligns with its specifications.</P>
            <p class="text-secondary">As time progresses, the performance of a measuring instrument inevitably declines, and it becomes necessary to calibrate it to preserve its function and performance.</p>
            <p class="text-secondary">The advantages of calibrating a measuring instrument include preserving its function and performance, preventing product defects, maintaining the instrument’s condition to align with its specifications, avoiding hazardous risks, and minimizing work accidents to ensure workplace safety.</p>
          </div>
          <div class="col-md-5">
            <div class="header-img">
              <img src="../assets/img/s4.jpg" alt="maintenance plane">
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