@extends('master.master')

@section('my-css')
  <link rel="stylesheet" href="{{ url(mix('assets/css/style.css')) }}">
  <link rel="stylesheet" href="{{ url(mix('assets/css/global.css')) }}">
@endsection

@section('content')
  @include('includes.slideBarResponsive')
  @include('includes.slideBar')

  <section class="container-layout">
    @include('includes.header')

    @include('includes.main')

    @include('includes.footer')
  </section>

@endsection

@section('my-js')
    <script src="{{ url(mix('assets/js/scripts.js')) }}"></script>
@endsection
