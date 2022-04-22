@extends('front.layout')
@section('title')
   Kayıt Ol
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/panel.css') }}">  
  <style>
    /*d-flex justify-content-center align-items-center*/
        body{
            align-items: center;
        }
  </style>
@endsection
@section('content') 

<form class="form-signin m-1 p-4 bg-white rounded w-25" action="" method="POST">
    @csrf
    <h5 class="text-center mb-3">Kullanıcı Kayıt Sayfası</h5>
    <div class="row p-4">
        <div class="col-md-12 mx-auto">
          <div class="form-group ps-2 text-center">
                <label for="" class="form-label "> Kullanıcı Adı </label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="FullName" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        </div>
      </div>
    <div class="row p-4">
      <div class="col-md-12 mx-auto">
        <div class="form-group ps-2 text-center">
            <label for="" class="form-label "> Mail </label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Adress">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
      </div>
    </div>
        <div class="row p-4">
          <div class="col-md-12 mb-2 mx-auto">
            <div class="form-group ps-2 text-center">
                <label for="" class="form-label"> Şifre </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
        </div>
        <div class="row p-4">
            <div class="col-md-12 mb-2 mx-auto">
              <div class="form-group ps-2 text-center">
                  <label for="" class="form-label"> Şifre Tekrarı</label>
                  <input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control">
                </div>
            </div>
          </div>

    <div class="row">
      <div class="col-sm-6 mb-2 mt-2 ">
        <div class="form-group ps-2">
          <button class="form-control btn btn-outline-secondary " type="submit">Kayıt ol</button>
        </div>
      </div>
      <div class="col-sm-6 mb-2 mt-2">
        <div class="form-group ps-2">
        </div>
      </div>
    </div>
</form>
@endsection
@section('js')
@endsection