
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">

    <div class="bg-green-100 p-5 mb-5">
        <h1 class="text-2xl font-semibold">Array</h1>
        {{ var_dump($data) }}
    </div>
    <div>
        <h2 class="text-lg font-semibold">Menampilkan sebuah element array</h2>
        @foreach ($data as $key => $item)
        <p class="text-md font-semibold">Array element {{ $key }}</p>
        {{ $item }}
        @endforeach
    </div>
    </div>
</body>
</html>
