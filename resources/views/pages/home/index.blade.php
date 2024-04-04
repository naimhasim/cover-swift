@extends('layouts.default')
@section('content')
  <div class="fixed bottom-16 right-16 shadow-2xl">
    <div class="rounded-full bg-slate-800 dark:bg-slate-50 w-10 h-10 flex items-center justify-center shadow-xl cursor-pointer" onclick="toggleDarkMode()">
      <i class=" self-center text-white dark:text-slate-800 fa-solid fa-circle-half-stroke"></i>
    </div>
  </div>
  <div class="flex flex-col">
    @include('pages.home.section1')
    @include('pages.home.section3')
    @include('pages.home.section2')
    @include('pages.home.slide')

    {{-- <section class="border border-purple-900">5</section> --}}
    {{-- <section class="border border-purple-900">5</section> --}}
  </div>

@stop
