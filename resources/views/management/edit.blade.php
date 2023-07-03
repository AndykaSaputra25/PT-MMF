@extends('layouts.app')

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data Management')

@section('content')

<div class="container">
    <a href="/admin/management" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('management.update', $management->id)  }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" value="{{$management->name}}">
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Posisi</label>
                    <input type="text" class="form-control" name="position" placeholder="Posisi/Jabatan" value="{{$management->position}}">
                </div>
                @error('position')
                <small style="color:red">{{$message}}</small>
                @enderror
                 <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$management->description}}</textarea>
                </div>
                 @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$management->image}}" alt="" class="img-fluid">
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
