@php
  $headers = [
    [
      'name' => 'Industries',
      'href' => '/#Industries',
    ],
    [
      'name' => 'Coverages',
      'href' => '/#Coverages',
    ],
    [
      'name' => 'How it Works',
      'href' => '/#how',
    ],
    [
      'name' => 'Tool & Advices',
      'href' => '/#advices',
    ],
  ];
@endphp

<!doctype html>
<html lang="en" class="">
<head>
  @include('includes.head')
</head>
<body class="bg-slate-100 dark:bg-slate-800 text-foreground font-['Helvetica']">
  <header class="row">
     @include('includes.header', $headers )
   </header>
<main class="container mx-auto">
   <div id="main" class="row">
      <div class="h-[75px]"></div>  {{-- header placeholder only --}}
    @yield('content')
   </div>
</main>
<footer class="row">
  @include('includes.footer', $headers )
 </footer>
<script src="https://kit.fontawesome.com/317395b246.js" crossorigin="anonymous"></script>
<script>
  // Function to detect system preference and toggle dark mode
  function toggleDarkMode() {
      const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
      const htmlElement = document.querySelector('html');

      if (prefersDarkMode) {
          htmlElement.classList.add('dark');
      } else {
          htmlElement.classList.remove('dark');
      }
  }
  // toggleDarkMode();
</script>
</body>
</html>
