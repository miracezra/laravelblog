@extends('front.layout')
@section('title')
    Kullanıcı Arayüzü
@endsection
@section('css')
    <style>
      
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <!-- Menu -->
                <div class="col-md-2 mt-2">
                    <ul class="list-group fw-bold menu">
                        <ul class="list-group fw-bold menu">
                            <li class="list-group-item text-light bg-secondary active text-center">Menu</li>
                            <li class="list-group-item bg-light text-dark "><a href="yaziekle"
                                    class="nav-link link-dark"><i class="bi bi-file-earmark-plus fs-3 p-2"></i>Yazı
                                    Ekle</a></li>
                            <li class="list-group-item bg-light text-dark"><a href="yazisil"
                                    class="nav-link link-dark"><i
                                        class="bi bi-chat-left-text fs-3 p-2"></i>Yazılarım</a></li>
                            <li class="list-group-item bg-light text-dark"><a href="yazilarim"
                                    class="nav-link link-dark"><i class="bi bi-box-arrow-right fs-3 p-2"></i> Cıkıs
                                    Yap</a></li>
                        </ul>
                </div>
                <!-- İçerik -->
                <div class="col-md-10">
                    <div class="row">
                        <!-- İçerik Alanı -->
                        <div class="col-md-8">
                            <!-- <h4 class="title text-center mt-2 border rounded text-white opacity-75 p-2 bg-primary">Sayfa Basligi</h4> -->
                            <div class="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class=" form-control w-50 mt-2" placeholder="İcerik Basligi">
                                        <textarea name="" id="" cols="110" rows="15" class="mt-2 pt-4"
                                            placeholder="İcerik"></textarea>
                                    </div>
                                    <div class="col-md-2 ms-auto me-auto mt-2 p-2 text-center">
                                        <button class="btn btn-outline-success"><i class="bi bi-plus-circle ">
                                                Kaydet</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kullanıcı Alanı -->
                        <div class="col-md-4 text-center mt-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="etiket mb-2">
                                        <label for="" class="form-label fs-5 fw-bold">Kategoriler</label>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" checked disabled>
                                                <label class="form-check-label fs-5 " for="flexCheckDefault">
                                                    Genel
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label fs-5" for="flexCheckDefault">
                                                    Spor
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label fs-5" for="flexCheckDefault">
                                                    Tarih
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label fs-5" for="flexCheckDefault">
                                                    Kültür
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    
@endsection