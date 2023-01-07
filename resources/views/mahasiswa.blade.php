@extends('layouts.main')
@section('content')
    <div class="p-4 ">
        <form action="/mahasiswa" method="post">
            @csrf
            <div class="rounded shadow p-6 bg-white mb-6">
                <div class="grid grid-cols-11 gap-4 items-end justify-center">
                    <div class="flex flex-col gap-2 col-span-2">
                        <label for="nim">NIM</label>
                        <input required type="text" id="nim" name="nim" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-3">
                        <label for="nama">Nama</label>
                        <input required type="text" id="nama" name="nama" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="kelas">Kelas</label>
                        <input required type="text" id="kelas" name="kelas" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="semester">Semester</label>
                        <input required type="number" id="semester" name="semester" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="angkatan">Angkatan</label>
                        <input required type="number" id="angkatan" name="angkatan" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-2">
                        <label for="nim">Prodi</label>
                        <select  name="prodi" id="prodi" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                            @foreach ($prodi as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="bg-green-600 px-2 py-1 text-white rounded active:ring active:ring-green-200 ">Tambah</button>
                </div>
            </div>
        </form>
        
        <div class="rounded shadow p-6 bg-white">
            <h3 class="font-semibold text-slate-600 text-2xl mb-6">Data Mahasiwa</h3>
            <table class="table-auto w-full table-data" id="example">
                <thead>
                    <tr>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">No</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">NIM</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">NAMA</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">KELAS</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">PRODI</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">SEMESTER</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">ANGKATAN</th>
                        <th class="bg-sky-600 text-white font-semibold py-2 border-r border-white">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $data)
                        <tr class="even:bg-sky-50">
                            <td class="p-2 text-slate-600 text-center">{{$loop->iteration}}</td>
                            <td class="p-2 text-slate-600">{{$data->nim}}</td>
                            <td class="p-2 text-slate-600 capitalize flex items-center gap-2">
                                <div class="w-6 h-6 photo-profile rounded-full" 
                                style="background-image: url('{{asset('img/photo-profile/'.($data->foto? $data->foto:'default.jpg'))}}')"></div>
                                <span>{{$data->nama}}</span>
                            </td>
                            <td class="p-2 text-slate-600 text-center uppercase">{{$data->kelas}}</td>
                            <td class="p-2 text-slate-600 text-center capitalize">{{$data->prodi}}</td>
                            <td class="p-2 text-slate-600 text-center">{{$data->semester}}</td>
                            <td class="p-2 text-slate-600 text-center">{{$data->angkatan}}</td>
                            <td class="p-2 text-slate-600">
                                <div class="flex gap-2 justify-center">
                                    <a href="/mahasiswa/{{$data->nim}}" class="bg-sky-500 px-2 py-1 rounded text-white">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <form action="/mahasiswa/{{$data->id}}/delete" method="post">
                                        @csrf
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