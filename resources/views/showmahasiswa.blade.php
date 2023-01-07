@extends('layouts.main')
@section('content')
<div class="p-4 grid grid-cols-5 gap-4">
    <div class="rounded shadow p-6 bg-white col-span-3">
        <h3 class="font-semibold text-slate-600 text-2xl mb-6">Edit Data Mahasiwa</h3>
        <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="post">
            @csrf
            <div class="flex flex-col gap-4">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="flex flex-col gap-2">
                            <label for="kelas">Kelas</label>
                            <input type="text" id="kelas" name="kelas" value="{{$mahasiswa->kelas}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="semester">Semester</label>
                            <input type="number" id="semester" name="semester" value="{{$mahasiswa->semester}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="angkatan">Angkatan</label>
                            <input type="number" id="angkatan" name="angkatan" value="{{$mahasiswa->angkatan}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="nim">Prodi</label>
                            <select name="prodi" id="prodi" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                                @foreach ($prodi as $data)
                                    <option value="{{$data->id}}" selected={{$mahasiswa->prodi_id === $data->id}}>{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" value="{{$mahasiswa->nim}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{$mahasiswa->nama}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="py-2">
                        <button class="bg-yellow-500 px-3 py-2 rounded hover:bg-yellow-600 active:ring active:ring-yellow-200 text-white">Update</button>
                    </div>
                </div>
        </form>
    </div>
    <div class="rounded shadow p-6 bg-white col-span-2">
        <div class="flex flex-col items-center justify-center">
            <div class="w-[250px] h-[250px] bg-red-500 photo-profile mb-4"></div>
            <div class="col-span-2 text-sky-700 text-semibold text-lg ">{{$mahasiswa->nama}}</div>
            <div class="col-span-2 text-slate-500 ">{{$mahasiswa->nim}}</div>
            <div class="col-span-2 text-slate-600 uppercase">{{$mahasiswa->prodi_name}}-{{$mahasiswa->kelas}}</div>
        </div>
    </div>
</div>
@endsection