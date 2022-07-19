<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArsipSurat\SuratKeluar;
use App\Models\Admin\ArsipSurat\SuratMasuk;
use App\Models\Admin\ManagmentData\Jenissurat;
use App\Models\Keluhan\keluhan;
use App\Models\Sispi\Admin\Dokumen;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_suratmasuk = SuratMasuk::all()->count();
        $jumlah_suratkeluar = SuratKeluar::all()->count();
        $jumlah_dokumen = Dokumen::all()->count();
        $jumlah_keluhan = keluhan::all()->count();
        return view('admin.dashboard.index')
            ->with('jumlah_suratmasuk', $jumlah_suratmasuk)
            ->with('jumlah_suratkeluar', $jumlah_suratkeluar)
            ->with('jumlah_dokumen', $jumlah_dokumen)
            ->with('jumlah_keluhan', $jumlah_keluhan);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
