<?php

namespace App\Http\Controllers\Sispi\KeluhanKoordinator;

use App\Http\Controllers\Controller;
use App\Models\Sispi\KeluhanKoordinator\JenisLaporan;
use Illuminate\Http\Request;

class JenisLaporanController extends Controller
{
    public function index()
    {
        return view('sispi.keluhan-koordinator.managment-data.jenis-laporan.index', [
            'list_jenislaporan' => JenisLaporan::latest()->get()
        ]);
    }
    public function store(Request $request)
    {
        $jenislaporan = new JenisLaporan();
        $jenislaporan->nama = request('nama');
        $jenislaporan->save();


        return redirect('sispi/keluhan-koordinator/jenis-laporan')->with('success', 'Data Ditambahkan');
    }
}
