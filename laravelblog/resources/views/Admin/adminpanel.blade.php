@extends('front.layout')
@section('title')
    Yönetici Paneli
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
    <h5 class="text-center mb-3">Admin Girişi</h5>
    <div class="row p-4">
      <div class="col-md-12 mx-auto">
        <div class="form-group ps-2 text-center">
          <label for="" class="form-label "> Mail </label>
          <input type="text" class="form-control" placeholder="Örnek@mail.com" name="email" id="email">
        </div>
      </div>
    </div>
        <div class="row p-4">
          <div class="col-md-12 mb-2 mx-auto">
            <div class="form-group ps-2 text-center">
                <label for="" class="form-label"> Şifre </label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
          </div>
        </div>
        <div class="row">
      <div class="col-sm-12 mb-2 mt-2 ">
        <div class="form-group ps-2">
          <input type="button" onclick="location.href='/yazilar.html'" class="form-control btn btn-outline-success " id="giris" value="Giriş Yap" name="giris-yap">
        </div>
      </div>
    </div>
  </form>
@endsection

@section('js')
    
@endsection