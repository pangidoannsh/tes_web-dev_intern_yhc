<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $mahasiswa = [];
        if (request('search')) {
            $search = explode(" | ", request('search'));
            $nama = $search[0];
            // dd($search);
            $mahasiswa = Mahasiswa::leftJoin("prodi", "prodi.id", "=", "mahasiswa.prodi")
                ->where('mahasiswa.nama', 'like', '%' . $nama . '%');
            if (count($search) > 1) {
                $prodi = $search[1];
                if ($prodi) {
                    $mahasiswa->where('prodi.nama', 'like', '%' . $prodi . '%');
                }
            }
            $mahasiswa = $mahasiswa->select(
                'mahasiswa.id',
                'mahasiswa.nim',
                'mahasiswa.nama',
                'mahasiswa.angkatan',
                'mahasiswa.semester',
                'mahasiswa.kelas',
                'mahasiswa.foto',
                'prodi.nama as prodi',
            )->get();
        }
        // return dd($mahasiswa);
        return view('search', [
            'title' => 'search',
            'data_search' => $mahasiswa
        ]);
    }
}
