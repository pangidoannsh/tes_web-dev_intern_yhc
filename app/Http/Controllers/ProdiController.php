<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $data = Prodi::all();

        return view('prodi', [
            "prodi" => $data,
            "title" => "prodi",
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => "required",
            'fakultas' => "required",
        ]);
        Prodi::create([
            'nama' => $request->nama,
            'fakultas' => $request->fakultas,
        ]);
        return redirect('/prodi');
    }
}
