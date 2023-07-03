@extends('layouts.app')

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data News')

@section('content')

<div class="container">
    <a href="/admin/news" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('news.store')  }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama">
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" name="date" placeholder="Tanggal Peristiwa">
                </div>
                @error('position')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                 @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                 <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                 @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
