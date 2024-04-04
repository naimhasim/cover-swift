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
<html lang="en" class="dark:">
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

  function toggleDarkMode() {
    const htmlElement = document.querySelector('html');
    htmlElement.classList.toggle('dark');

    const isDarkMode = htmlElement.classList.contains('dark');

    // Store the current state in localStorage
    localStorage.setItem('darkMode', isDarkMode ? 'dark' : '');
      console.log('asd')
  }

  document.addEventListener('DOMContentLoaded', function() {
    const htmlElement = document.querySelector('html');
    const storedDarkMode = localStorage.getItem('darkMode');
    if (storedDarkMode === 'dark') {
        htmlElement.classList.add('dark');
    } else if (storedDarkMode === '') {
        htmlElement.classList.remove('dark');
    } else {
        // If no value is found in localStorage, check the system preference
        const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (prefersDarkMode) {
            htmlElement.classList.add('dark');
        }
    }
});
</script>
</body>
</html>
