@extends('layouts.default')
@section('content')
@if (session('success'))
@include('components.toast-success')
@endif
    <!-- Modal toggle -->
    <button data-modal-target="create-modal" data-modal-toggle="create-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Create Artis
    </button>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Kelamin
                </th>
                <th scope="col" class="px-6 py-3">
                    Negara
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allArtis as $artis)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $artis->nm_artis }}
                </th>
                <td class="px-6 py-4">
                    {{ $artis->jk }}
                </td>
                <td class="px-6 py-4">
                    {{ $artis->negara }}
                </td>
                <td class="px-6 py-4">
                <button data-modal-target="{{'detail-modal-'.$artis->kd_artis}}" data-modal-toggle="{{'detail-modal-'.$artis->kd_artis}}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Detail
                </button>
                <button data-modal-target="{{'update-modal-'.$artis->kd_artis}}" data-modal-toggle="{{'update-modal-'.$artis->kd_artis}}" class="block text-white bg-yellow-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Update
                </button>
                <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="block text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Delete
                </button>
                </td>
            </tr>
            @include('components.modal', ['type'=>'detail', 'modal'=>'detail-modal-'.$artis->kd_artis, 'data'=>$artis])
            @include('components.modal', ['type'=>'update', 'modal'=>'update-modal-'.$artis->kd_artis, 'data'=>$artis])
            @endforeach
        </tbody>
    </table>
</div>

@include('components.modal', ['type'=>'create', 'modal'=>'create-modal'])
@include('components.confirmation-modal', ['data'=>$artis])
@stop
