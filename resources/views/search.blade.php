@extends('layouts.main')
@section('content')
<div class="p-4">
    <div class="rounded bg-white shadow p-6">
        <form id="search" action="/search" >
            <h3 class="text-3xl text-slate-600 font-semibold">Cari Mahasiswa</h3>
            <div class="text-sm font-semibold text-slate-600 mt-2">Format : 
                <span class="font-normal text-slate-500">{nama_mahasiswa} | {program_studi}</span> atau 
                <span class="font-normal text-slate-500">{nama_mahasiswa}</span>
            </div>
            <div class="relative mt-4">
                <button class="absolute top-[50%] -translate-y-[50%] text-2xl text-slate-400 right-0 bg-sky-500 px-3 h-full rounded-r-lg">
                    <i class="fa fa-magnifying-glass text-white"></i>
                </button>
                <input type="text" id="input-search" class="pl-2 py-2 pr-16 border border-slate-400 focus:outline-none focus:border-sky-500 rounded-lg
                focus:ring focus:ring-sky-200 w-full" name="search" value="{{request('search')}}">
            </div>
        </form>
    </div>
    @if (request('search'))
        @if (count($data_search) < 1)
        <center><h3 class="mt-6 text-xl">Data Mahasiswa Tidak Ditemukan</h3></center>
        @endif
        @foreach ($data_search as $mahasiswa)
            <div class="rounded bg-white shadow p-6 flex justify-betwen mt-4">
                <div class="flex gap-4">
                    <div class="w-20 h-20 photo-profile rounded-full bg-slate-200"
                    style="background-image: url('{{asset('img/photo-profile/'.($mahasiswa->foto? $mahasiswa->foto:'default.jpg'))}}')"></div>
                    <div class="flex flex-col self-center">
                        <div class="text-sky-700 text-xl">{{$mahasiswa->nama}}</div>
                        <div class="text-slate-500">{{$mahasiswa->nim}}</div>
                        <div class="text-slate-600 uppercase">{{$mahasiswa->prodi}}</div>
                    </div>
                    <div class="flex self-end ml-8 gap-4">
                        <div class="text-sm text-slate-700 font-semibold">Kelas : <span class="text-slate-500 uppercase font-normal">{{$mahasiswa->kelas}}</span></div>
                        <div class="text-sm text-slate-700 font-semibold">Semester : <span class="text-slate-500 font-normal">{{$mahasiswa->semester}}</span></div>
                        <div class="text-sm text-slate-700 font-semibold">Angkatan : <span class="text-slate-500 font-normal">{{$mahasiswa->angkatan}}</span></div>
                    </div>
                </div>
                <div>
                    <a href="/mahasiswa/{{$mahasiswa->nim}}" class="bg-sky-500 px-2 py-1 rounded text-white">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection