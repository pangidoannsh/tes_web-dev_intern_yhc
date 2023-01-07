@extends('layouts.main')
@section('content')
<div class="p-4 grid grid-cols-5 gap-4">
    <div class="rounded shadow p-6 bg-white col-span-3">
        <h3 class="font-semibold text-slate-600 text-2xl mb-6">Edit Data Mahasiwa</h3>
        <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="relative w-full h-[400px]">
                    <label for="photo" class="absolute overflow-hidden cursor-pointer hover:bg-slate-50 
                    h-[400px] w-full border-2 border-dashed border-slate-300 text-slate-400">
                        <div class="flex flex-col items-center justify-center h-full" id="photo-label">
                            <i class="fa-solid fa-plus text-2xl"></i>
                            <span>Foto Mahasiswa</span>
                        </div>
                        <img src="#" alt="" class="w-full" id="preview-photo">
                    </label>
                    <input type="file" class="hidden" id="photo" name="photo">
                </div>
                <div class="grid grid-cols-3 gap-4 justify-center">
                    <div class="flex flex-col gap-2 col-span-3">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{$mahasiswa->nama}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-3">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" value="{{$mahasiswa->nim}}" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-3">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" id="prodi" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                            @foreach ($prodi as $data)
                                <option value="{{$data->id}}" {{$mahasiswa->prodi_id === $data->id? 'selected':''}}>{{$data->nama}}</option>
                            @endforeach
                        </select>
                    </div>
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
                    <div class="py-2">
                        <button class="bg-yellow-500 px-3 py-2 rounded hover:bg-yellow-600 active:ring active:ring-yellow-200 text-white">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="rounded shadow p-6 bg-white col-span-2">
        <div class="flex flex-col items-center justify-center">
            <div class="w-[250px] h-[250px] bg-slate-300 photo-profile mb-4 rounded-full"
            style="background-image: url('{{asset('img/photo-profile/'.$mahasiswa->foto)}}')"></div>
            <div class="col-span-2 text-sky-700 text-semibold text-lg ">{{$mahasiswa->nama}}</div>
            <div class="col-span-2 text-slate-500 ">{{$mahasiswa->nim}}</div>
            <div class="col-span-2 text-slate-600 uppercase">{{$mahasiswa->prodi_name}}-{{$mahasiswa->kelas}}</div>
        </div>
        <div class="flex flex-col gap-2 mt-6">
            <div class="grid grid-cols-5 ">
                <span class="text-slate-600 font-semibold col-span-2">Index Penilaian :</span>
                <span class="text-slate-500 col-span-3">3.95</span>
            </div>
            <div class="grid grid-cols-5 ">
                <span class="text-slate-600 font-semibold col-span-2">IP Kumulatif :</span>
                <span class="text-slate-500 col-span-3">3.70</span>
            </div>
        </div>
    </div>
</div>

<script>
    const labelPhoto = document.getElementById("photo-label");
    const inputPhoto = document.getElementById("photo");
    const previewPhoto = document.getElementById("preview-photo")

    inputPhoto.onchange = () => {
        labelPhoto.style.display = "none";
        let reader = new FileReader();
        reader.readAsDataURL(inputPhoto.files[0]);
        reader.onload = ()=>{
            previewPhoto.setAttribute('src',reader.result);
        }
    }
</script>
@endsection