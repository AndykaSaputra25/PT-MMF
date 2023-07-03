@extends('layouts.app')

@section('page')
    {{ $about->name_1 }}
@endsection
@section('title', 'Data Contact')

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
            <form action="/admin/contact/{{$contact->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">MMF</label>
                    <textarea name="mmf" id="" cols="30" rows="10" class="form-control" placeholder="Bercerita tentang profile MMF">{{$contact->mmf}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Email 1</label>
                    <input type="email" class="form-control" name="email_1" placeholder="Email" value="{{$contact->email_1}}">
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email 2</label>
                    <input type="email" class="form-control" name="email_2" placeholder="Email" value="{{$contact->email_2}}">
                </div>
                <div class="form-group">
                    <label for="">Email 3</label>
                    <input type="email" class="form-control" name="email_3" placeholder="Email" value="{{$contact->email_3}}">
                </div>
                <div class="form-group">
                    <label for="">Email 4</label>
                    <input type="email" class="form-control" name="email_4" placeholder="Email" value="{{$contact->email_4}}">
                </div>
                 
                <div class="form-group">
                    <label for="">WhatsApp 1</label>
                    <input type="text" class="form-control" name="wa_1" placeholder="WhatsApp" value="{{$contact->wa_1}}">
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">WhatsApp 2</label>
                    <input type="text" class="form-control" name="wa_2" placeholder="WhatsApp" value="{{$contact->wa_2}}">
                </div>
                <div class="form-group">
                    <label for="">WhatsApp 3</label>
                    <input type="text" class="form-control" name="wa_3" placeholder="WhatsApp" value="{{$contact->wa_3}}">
                </div>
                <div class="form-group">
                    <label for="">WhatsApp 4</label>
                    <input type="text" class="form-control" name="wa_4" placeholder="WhatsApp" value="{{$contact->wa_4}}">
                </div>

                <div class="form-group">
                    <label for="">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="Linkedin" value="{{$contact->linkedin}}">
                </div>

                <div class="form-group">
                    <label for="">Instagram 1</label>
                    <input type="text" class="form-control" name="ig_1" placeholder="Instagram" value="{{$contact->ig_1}}">
                </div>
                <div class="form-group">
                    <label for="">Instagram 2</label>
                    <input type="text" class="form-control" name="ig_2" placeholder="Instagram" value="{{$contact->ig_2}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
