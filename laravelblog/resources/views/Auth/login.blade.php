@extends('front.layout')
@section('title')
   Giriş
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
<form action="" class="m-1 p-4 bg-white rounded w-25">
    @csrf
    <h5 class="text-center mb-3">Giriş</h5>
    <div class="row p-4">
      <div class="col-md-12 mx-auto">
        <div class="form-group ps-2 text-center">
          <label for="" class="form-label "> Mail </label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Adress">
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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          </div>
        </div>
        <div class="row">
      <div class="col-sm-12 mb-2 mt-2 ">
        <div class="form-group ps-2">
         <button type="submit" class="form-control btn btn-outline-success">Giriş Yap</button>
         
        </div>
      </div>
    </div>
  </form>
@endsection

@section('js')
    
@endsection