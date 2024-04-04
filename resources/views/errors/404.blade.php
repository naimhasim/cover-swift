@extends('layouts.default')

@section('content')
<div class="fixed bottom-16 right-16 shadow-2xl">
  <div class="rounded-full bg-slate-800 dark:bg-slate-50 w-10 h-10 flex items-center justify-center shadow-xl cursor-pointer" onclick="toggleDarkMode()">
    <i class=" self-center text-white dark:text-slate-800 fa-solid fa-circle-half-stroke"></i>
  </div>
</div>
  <main>
    <section class="grow min-h-[700px] flex flex-row justify-center items-center">
      <div class="flex flex-col">
        <div class="font-bold text-6xl text-center p-4 lg:pl-8">404</div>
        <div class="flex flex-col justify-center items-center p-4 h-min">
          Sorry, We could not find this page.
          <a href="/">
          <div class="font-bold text-primary hover:translate-x-2 duration-300">
            Home <i class="text-sm fa-solid fa-arrow-right"></i>
          </div>
          </a>
        </div>
      </div>
    </section>

  </main>
@stop
