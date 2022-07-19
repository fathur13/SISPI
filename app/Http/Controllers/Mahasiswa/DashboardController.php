<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Keluhan\keluhan;
use App\Models\Sispi\KeluhanKoordinator\JenisLaporan;
use App\Models\Sispi\KeluhanKoordinator\KategoriLaporan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('mahasiswa.dashboard');
    }
    public function index(Request $request)
    {
        $jumlah_keluhan = keluhan::all()->count();
        return view('mahasiswa.dashboard', [
            'list_kategorilaporan' => KategoriLaporan::all(),
            'list_jenislaporan' => JenisLaporan::all(),
        ],)
            ->with('jumlah_keluhan', $jumlah_keluhan);
    }
    public function store(Request $request)
    {
        $rules = [
            'jenis' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'email' => 'required||email:rfc,dns',
            'nama' => 'required',
            'file' => 'required',
        ];
        $messages = [
            'required' => ' :attribute wajib di isi',
            'email' => ':attribute harus valid',
        ];
        $this->validate($request, $rules, $messages);

        $keluhan = new keluhan();
        $keluhan->id_jenislaporan = request('jenis');
        $keluhan->judul = request('judul');
        $keluhan->isi = request('isi');
        $keluhan->tanggal = request('tanggal');
        $keluhan->lokasi = request('lokasi');
        // $keluhan->id_kategorilaporan = request('kategori');
        $keluhan->email = request('email');
        $keluhan->nama = request('nama');
        $keluhan->status = 1;
        $keluhan->handleUploadFile('file');
        $keluhan->save();

        // dd($suratkeluar);


        return redirect('lapor')->with('warning', 'Laporan Berhasil Di Kirim');
    }
}
