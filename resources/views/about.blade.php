@extends('layouts.app')

@section('page')
    {{ $about->name_1 }}
@endsection

@section('title', 'Data Perusahaan')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
             @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="/admin/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <img src="/image/{{$about->logo}}" alt="" class="img-fluid" width="150">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" class="form-control" name="logo" >
                </div>
                @error('logo')
                <small style="color:red">{{$message}}</small>
                @enderror

                <img src="/image/{{$about->icon}}" alt="" class="img-fluid" width="150">
                <div class="form-group">
                    <label for="">Icon</label>
                    <input type="file" class="form-control" name="icon" >
                </div>
                @error('icon')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="name_1" placeholder="Main Name" value="{{$about->name_1}}">
                </div>
                @error('name_1')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama Tambahan 1</label>
                    <input type="text" class="form-control" name="name_2" placeholder="Sub Name" value="{{$about->name_2}}">
                </div>
                <div class="form-group">
                    <label for="">Nama Tambahan 2</label>
                    <input type="text" class="form-control" name="name_3" placeholder="Sub Name" value="{{$about->name_3}}">
                </div>

                <div class="form-group">
                    <label for="">Meet MMF</label>
                    <textarea name="meet" id="" cols="30" rows="10" class="form-control" placeholder="Meet MMF">{{$about->meet}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Service</label>
                    <textarea name="service" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Service">{{$about->service}}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Deskripsi 1</label>
                    <input type="text" class="form-control" name="desk_1" placeholder="Deskripsi" value="{{$about->desk_1}}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi 2</label>
                    <input type="text" class="form-control" name="desk_2" placeholder="Sub Deskripsi" value="{{$about->desk_2}}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi 3</label>
                    <input type="text" class="form-control" name="desk_3" placeholder="Sub Deskripsi" value="{{$about->desk_3}}">
                </div>

                <div class="form-group">
                    <label for="">Alamat 1</label>
                    <input type="text" class="form-control" name="alamat_1" placeholder="Alamat" value="{{$about->alamat_1}}">
                </div>
                @error('alamat_1')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat 2</label>
                    <input type="text" class="form-control" name="alamat_2" placeholder="Sub Alamat" value="{{$about->alamat_2}}">
                </div>
                <div class="form-group">
                    <label for="">Alamat 3</label>
                    <input type="text" class="form-control" name="alamat_3" placeholder="Sub Alamat" value="{{$about->alamat_3}}">
                </div>

                <div class="form-group">
                    <label for="">Maps 1</label>
                    <textarea name="maps_1" id="" cols="30" rows="10" class="form-control" placeholder="Maps">{{$about->maps_1}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Maps 2</label>
                    <textarea name="maps_2" id="" cols="30" rows="10" class="form-control" placeholder="Sub Maps">{{$about->maps_2}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Maps 3</label>
                    <textarea name="maps_3" id="" cols="30" rows="10" class="form-control" placeholder="Sub Maps">{{$about->maps_3}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
