@extends("layouts.bodyLayout")

@section("style")
    <link rel="stylesheet" href="{{asset('assets/css/pages/accueil.css')}}">
@endsection

@section("titre")
    CRUD Manager - Accueil
@endsection

@section("content")
    <div class="first_img">
        <img src="{{asset('assets/imgs/1_Nature_1.png')}}" alt="">
        <h1>Bienvenu sur le CRUD Manager</h1>
    </div>
@endsection
