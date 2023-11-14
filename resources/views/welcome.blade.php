@extends('layouts.plantilla')

@section('title','Hidrobolivar')

@section('css')
 @include('home.css')

 <style>
        .waves {
      position: absolute;
/*      left: 0;
      right: 0;
      height: 200px;
      bottom: 0;*/
      bottom: -135px;
      height: 527px;
      width: 100%;
      overflow: hidden;
    }
    .wave {
      position: absolute;
      left: -180px;
      bottom: 0;
      /*width: 200px;*/
      /*height: 200px;*/
      /*width: 100%;*/
      /*border-radius: 50%;*/
      /*background:rgba(0,0,0, .3);*/
      width: 2402px;
      height: 427px;
      background: url(https://static.platzi.com/media/files/waves_c8551f5d-ecf6-4a81-ae1d-f3a0ad55ba10.png) center bottom no-repeat;
      animation: 5s wave ease-in-out infinite alternate;
    }
    .wave.a {
      background-position: 0 -854px;
    }
    .wave.b {
      background-position: 0 -427px;
      animation-delay: .6s;
    }
    .wave.c {
      background-position: 0 0;
      animation-delay: 1.2s;
    }
    /*.container {
      position: absolute;
    }*/
    @keyframes wave {
      0% {
        transform: translate(0 , 0);
      }
      50% {
        transform: translate(-80px, 30px);
      }
      100% {
        transform: translate(160px, -60px);
      }
    }
 </style>
@endsection

@section('content')


<!-- ***** Wellcome Area Start ***** -->
@include('home.welcome')
<!-- ***** Wellcome Area End ***** -->


<!-- ***** RRSS ***** -->
@include('home.redes')
<!-- ***** RRSS ***** -->


<!-- ***** Hidroweb ***** -->
@include('home.hidroweb')
<!-- ***** Hidroweb ***** -->


<!-- ***** oficinas ***** -->
@include('home.oficinas')
<!-- ***** Oficinas ***** -->


<!-- ***** Calificacion ***** -->
@include('home.calificacion')
<!-- ***** Calificacion ***** -->

<!-- ***** Blog Start ***** -->
@include('home.noticias')
<!-- ***** Blog End ***** -->

@endsection


