@extends('layouts.app')

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data Certificate')

@section('content')

<div class="container">
    <a href="/admin/certificate" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('certificate.update', $certificate->id)  }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$certificate->title}}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <select class="form-select" name="description" id="" aria-label="Default select example">
                        <option selected>Choice Type</option>
                        <option value="ISO">ISO</option>
                        <option value="CAAP">CAAP</option>
                        <option value="KAN">KAN</option>
                        <option value="LAMBANGJA">LAMBANGJA</option>
                        <option value="ART">ART</option>
                        <option value="AMO">AMO</option>
                    </select>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$certificate->image}}" alt="" class="img-fluid">
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
