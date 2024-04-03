<nav class=" bg-slate-50 shadow-md fixed w-screen z-50">

  <ul class="flex flex-wrap flex-row gap-2 justify-between items-center h-[75px] px-5 container">
    <div class="text-primary">
      <li><a id="logo" href="/" class="font-semibold tracking-tight text-2xl">Cover Swift</a></li>
    </div>
    <div class="hidden lg:flex gap-9 font-bold dark:text-secondary">
      @foreach ( $headers as $header )
      <a class="py-2" href="{{ request()->path() === ($header['href']??null) ? "text-primary":"/#" }}"><li class="transform transition duration-300 ease-in hover:text-primary hover:-translate-y-2">{{$header['name']}}</li></a>
      @endforeach
    </div>
    <div class="flex gap-9 font-bold">
      <i class="text-[30px] lg:text-[0px] fa-solid fa-bars "></i>
      <button class="hidden lg:block bg-gradient-to-r from-indigo-500 to-blue-500 hover:bg-gradient-to-r hover:from-blue-800 hover:to-indigo-900 duration-300 hover:py-2 shadow-md text-sm text-slate-50 dark:bg-secondary border rounded-full py-1 px-5">
        Get in Touch
      </button>
    </div>
  </ul>

</div>
