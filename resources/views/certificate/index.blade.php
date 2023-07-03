@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data Certificate')

@section('content')

<div class="container">
    <a href="/admin/certificate/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table id="certificate" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($certificate as $certif)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$certif->title}}</td>
                    <td>{{$certif->description}}</td>
                    <td>
                        <img src="/image/{{$certif->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('certificate.edit', $certif->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{route('certificate.destroy', $certif->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@push('scripts')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#certificate').DataTable();
} );
</script>
@endpush