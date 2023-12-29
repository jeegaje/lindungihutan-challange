@extends('layouts.default')
@section('content')
<div class="mb-5">
    <h1 class="text-2xl font-semibold">Poin 10</h1>
    <p>Tampilkan jumlah pendapatan produser marvel secara keseluruhan</p>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Jumlah Pendapatan Marvel
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $marvelIncome[0]->jumlah_pendapatan }}
                </th>
            </tr>
        </tbody>
    </table>
</div>
@stop
