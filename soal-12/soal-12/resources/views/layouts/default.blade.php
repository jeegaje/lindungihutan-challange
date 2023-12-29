<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
        <a href="/" class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Soal Query</a>
  </div>
</nav>
<div class="container mx-auto my-5">
@yield('content')
</div>
</body>
</html>
