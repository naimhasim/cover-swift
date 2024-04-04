@extends('layouts.default')
@section('content')

  <div class="flex flex-col">
    @include('pages.home.section1')
    @include('pages.home.section2')
    @include('pages.home.slide')

    {{-- <section class="border border-purple-900">4</section> --}}
    {{-- <section class="border border-purple-900">5</section> --}}
    {{-- <section class="border border-purple-900">5</section> --}}
  </div>

@stop
