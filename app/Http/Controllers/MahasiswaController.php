<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::leftJoin('prodi', 'prodi.id', '=', 'mahasiswa.prodi')
            ->select(
                'mahasiswa.id',
                'mahasiswa.nim',
                'mahasiswa.nama',
                'mahasiswa.angkatan',
                'mahasiswa.semester',
                'mahasiswa.kelas',
                'mahasiswa.foto',
                'prodi.nama as prodi',
            )
            ->get();
        $prodi = Prodi::all();

        return view('mahasiswa', [
            "title" => "dashboard",
            "mahasiswa" => $data,
            "prodi" => $prodi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nim" => "required",
            "nama" => "required",
            "kelas" => "required",
            "angkatan" => "required",
            "semester" => "required",
            "prodi" => "required",
        ]);

        Mahasiswa::create([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "angkatan" => $request->angkatan,
            "semester" => $request->semester,
            "prodi" => $request->prodi,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        $data = Mahasiswa::where("nim", $nim)->leftJoin('prodi', 'prodi.id', '=', 'mahasiswa.prodi')
            ->select(
                'mahasiswa.id',
                'mahasiswa.nim',
                'mahasiswa.nama',
                'mahasiswa.angkatan',
                'mahasiswa.semester',
                'mahasiswa.kelas',
                'mahasiswa.foto',
                'prodi.id as prodi_id',
                'prodi.nama as prodi_name',
            )->first();

        $prodi = Prodi::all();

        return view('showmahasiswa', [
            'title' => 'show mahasiswa',
            'mahasiswa' => $data,
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nim" => "required",
            "nama" => "required",
            "kelas" => "required",
            "angkatan" => "required",
            "semester" => "required",
            "prodi" => "required",
            "photo" => "image|file"
        ]);
        $file = $request->file('photo');
        $nameFile = null;
        if ($request->file('photo')) {
            $nameFile = date("YmdHis") . $file->getClientOriginalExtension();
            $file->move('img/photo-profile', $nameFile);
        }
        Mahasiswa::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
            'semester' => $request->semester,
            'prodi' => $request->prodi,
            "foto" => $nameFile
        ]);
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect('/');
    }
}
