<?php

namespace App\Http\Controllers\Sispi\Koordinator;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArsipSurat\SuratKeluar;
use App\Models\Admin\ArsipSurat\SuratMasuk;
use App\Models\Sispi\Admin\Dokumen;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $jumlah_suratmasuk = SuratMasuk::all()->count();
        $jumlah_suratkeluar = SuratKeluar::all()->where('status',2)->count();
        $ditolak = SuratKeluar::all()->where('status',3)->count();
        $jumlah_dokumen = Dokumen::all()->count();
        return view('sispi.koordinator.dashboard.index')
            ->with('jumlah_suratmasuk', $jumlah_suratmasuk)
            ->with('jumlah_suratkeluar', $jumlah_suratkeluar)
            ->with('jumlah_dokumen', $jumlah_dokumen)
            ->with('ditolak', $ditolak);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
