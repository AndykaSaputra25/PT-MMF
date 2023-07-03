@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data Gallery')

@section('content')

<div class="container">
    <a href="/admin/gallery/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table id="gallery" class="table table-bordered table-hover table-striped">
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
                @foreach ($gallery as $gall)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$gall->title}}</td>
                    <td>{{$gall->description}}</td>
                    <td>
                        <img src="/image/{{$gall->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('gallery.edit', $gall->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{route('gallery.destroy', $gall->id)}}" method="POST">
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
    $('#gallery').DataTable();
} );
</script>
@endpush