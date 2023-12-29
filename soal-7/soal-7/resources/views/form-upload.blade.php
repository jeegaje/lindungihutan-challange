<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <!-- Form File Upload -->
        @if (session('success'))
        <div class="max-w-md mx-auto">
        <div class="bg-green-200 border-l-4 border-green-500 p-4 rounded shadow-md mb-4">
            <div class="flex">
                <div class="py-1">
                </div>
                <div class="ml-2">
                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif

        <h2 class="text-2xl font-semibold mb-4">Form Upload Berkas</h2>
        <form action="{{ route('fileupload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="file" class="block text-gray-700 font-medium mb-2">Pilih Berkas</label>
                <input type="file" accept=".pdf" id="file" name="file" class="w-full py-2 px-3 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-400">
                <label class="block text-gray-700 font-medium mb-2" for="description">Keterangan</label>
                <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="description" name="description" type="text" placeholder="keterangan">
            </div>
            @error('file')
                <p class="text-red-500">{{$message}}</p>
            @enderror
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full focus:outline-none focus:ring focus:ring-blue-400">Unggah Berkas</button>
            </div>
        </form>
        <!-- View uploaded file -->
        <h2 class="text-2xl font-semibold my-4">Data File yang Telah Diunggah</h2>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="text-left">Nama File</th>
                    <th class="text-left">Keterangan</th>
                    <th class="text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($files as $file)
                <tr>
                    <td class="py-2">{{ $file->name }}</td>
                    <td class="py-2">{{ $file->description }}</td>
                    <td class="py-2">
                        <a href="{{ route('filedownload', ['file'=>$file->id]) }}" class="text-blue-500 hover:underline">Unduh</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if(count($files) == 0)
            <p class="text-center my-5">Tidak ada Data</p>
        @endif
    </div>
</body>
</html>
