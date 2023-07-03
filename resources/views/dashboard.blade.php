@extends('layouts.app')

@section('page')
    {{ $about->name_1 }}
@endsection
@section('title', 'Dashboard')



@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <canvas id="myChart"></canvas>
      </div>
      <div class="col-md-3">
        <h2 class="pt-3 pb-2">Ringkasan</h2>
        <p>Selamat datang di halaman dashboard! Di sini Anda dapat melihat ringkasan informasi penting tentang aplikasi atau sistem Anda.</p>
        <p>Dashboard ini dirancang untuk memberikan gambaran singkat tentang statistik data dan kalender.</p>
      </div>
    </div>
    <div class="row pt-5">
        <div id="calendar"></div>
    </div>
  </div>
  
      
    
@endsection

@push('scripts')
<!-- Add jQuery library (required) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>


<!-- Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
    // Mengambil jumlah data dari masing-masing tabel menggunakan Eloquent
    $tables = ['sliders', 'management', 'services', 'certificate', 'gallery', 'clients', 'location', 'news'];
    $data = [];
    foreach ($tables as $table) {
        $count = DB::table($table)->count();
        array_push($data, $count);
    }

    // Mengubah array data ke dalam format yang dibutuhkan oleh JavaScript
    $dataStr = implode(', ', $data);
?>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sliders', 'Management', 'Services', 'Certificate', 'Gallery', 'Clients', 'Location', 'News'],
            datasets: [{
                label: 'Count of Database',
                data: [<?php echo $dataStr; ?>],
                borderWidth: 2
            }]
        },
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


<script>
    $("#calendar").evoCalendar();
</script>
@endpush
