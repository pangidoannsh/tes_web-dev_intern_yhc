@extends('layouts.main')
@section('content')
    <div class="p-4">
        <form action="/prodi" method="post">
            @csrf
            <div class="rounded shadow p-6 bg-white mb-6">
                <div class="grid grid-cols-7 gap-4 items-end justify-center">
                    <div class="flex flex-col gap-2 col-span-3">
                        <label for="nama">Nama</label>
                        <input required type="text" id="nama" name="nama" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-3">
                        <label for="fakultas">Fakultas</label>
                        <input required type="text" id="fakultas" name="fakultas" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <button class="bg-green-600 px-2 py-1 text-white rounded active:ring active:ring-green-200 ">Tambah</button>
                </div>
            </div>
        </form>
        
        <div class="rounded shadow p-6 bg-white">
            <h3 class="font-semibold text-slate-600 text-2xl mb-6">Data Program Studi</h3>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">No</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">NAMA</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">FAKULTAS</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $data)
                        <tr class="even:bg-sky-50">
                            <td class="p-2 text-slate-600 text-center">{{$loop->iteration}}</td>
                            <td class="p-2 text-slate-600 capitalize">{{$data->nama}}</td>
                            <td class="p-2 text-slate-600 capitalize">{{$data->fakultas}}</td>
                            <td class="p-2 text-slate-600">
                                <div class="flex gap-2 justify-center">
                                    <form action="/mahasiswa/{{$data->id}}/delete">
                                        <button class="border border-red-500 px-2 py-1 rounded text-red-500">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection