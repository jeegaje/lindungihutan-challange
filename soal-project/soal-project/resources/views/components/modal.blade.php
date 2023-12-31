<!-- Main modal -->
<div id="{{ $modal }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="{{ $modal }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                    @if ($type === 'create')
                    Create
                    @elseif ($type === 'update')
                    Update
                    @elseif ($type === 'detail')
                    Detail
                    @endif
                    Artis
                </h3>
                <form class="space-y-6"
                    @if($type === 'create')
                        action="{{ route('artis.create') }}"
                    @elseif($type === 'update')
                        action="{{ route('artis.update', ['kd_artis'=>$data->kd_artis]) }}"
                    @endif
                    method="post"
                >
                    @csrf
                    @if($type === 'create')
                        @method('post')
                    @elseif($type === 'update')
                        @method('patch')
                    @endif
                    <div class="mt-6">
                        <label for="nm_artis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nm_artis" id="nm_artis" value="{{ isset($data) ? $data->nm_artis : null }}" @if($type==='detail') disabled @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Artis" required>
                    </div>
                    <div class="mt-6">
                        <label for="jk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="jk" name="jk" @if($type==='detail') disabled @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled>Pilih Jenis Kelamin</option>
                        <option value="PRIA" @if(isset($data) && $data->jk === 'PRIA') selected @endif>Pria</option>
                        <option value="WANITA" @if(isset($data) && $data->jk === 'WANITA') selected @endif>Wanita</option>
                        </select>
                    </div>
                    <div class="mt-6">
                        <label for="bayaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bayaran</label>
                        <input type="number" name="bayaran" id="bayaran" value="{{ isset($data) ? $data->bayaran : null }}" @if($type==='detail') disabled @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Bayaran" required>
                    </div>
                    <div class="mt-6">
                        <label for="award" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Award</label>
                        <input type="number" name="award" id="award" value="{{ isset($data) ? $data->award : null }}" @if($type==='detail') disabled @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Jumlah Award" required>
                    </div>
                    <div class="mt-6">
                        <label for="negara" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Negara</label>
                        <select id="negara" name="negara" @if($type==='detail') disabled @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled>Pilih Negara</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->kd_negara }}" @if(isset($data) && $data->negara === $country->kd_negara) selected @endif>{{ $country->nm_negara }}</option>
                        @endforeach
                        </select>
                    </div>
                    @if ($type != 'detail')
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> @if($type=='create') Create @elseif($type=='update') Update @endif</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
