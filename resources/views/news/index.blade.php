@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data News')

@section('content')

<div class="container">
    <a href="/admin/news/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table id="news" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($news as $news)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$news->name}}</td>
                    <td>{{$news->date}}</td>
                    <td>
                        @php
                            $descriptionSentences = explode(".", $news->description);
                            $firstSentence = trim($descriptionSentences[0]);
                            echo $firstSentence;
                        @endphp
                    </td>
                    <td>
                        <img src="/image/{{$news->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{route('news.destroy', $news->id)}}" method="POST">
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
    $('#news').DataTable();
} );
</script>
@endpush