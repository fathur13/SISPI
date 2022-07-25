<?php

namespace App\Http\Controllers\Sispi\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArsipSurat\SuratKeluar;
use App\Models\Admin\ManagmentData\JenisSurat;
use Illuminate\Http\Request;

class PengjauanSuratController extends Controller
{
    public function index()
    {
        $data['list_suratkeluar'] = SuratKeluar::latest()->get();
        return view('sispi.admin.pengajuan-surat.index', $data);
    }

    public function ganti($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->status = 2;
        $suratkeluar->save();
        return redirect('sispi/admin/pengajuan-surat')->with('success', 'Data berhasil di ajukan');
    }
    public function hapus($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->status = 3;
        $suratkeluar->save();
        return redirect('sispi/admin/pengajuan-surat')->with('danger', 'Data telah di hapus');
    }

    

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
    public function show(SuratKeluar $suratkeluar)
    {
        $data['suratkeluar'] = $suratkeluar;
        return view('sispi.admin.pengajuan-surat.show', $data);
    }
    public function edit(SuratKeluar $suratkeluar)
    {
        $data['suratkeluar'] = $suratkeluar;
        return view('sispi.admin.pengajuan-surat.edit', [
            'list_jenissurat' => JenisSurat::all()
        ], $data);
    }
    public function update(SuratKeluar $suratkeluar)
    {
        $suratkeluar->nomorsurat = request('nomorsurat');
        $suratkeluar->tanggal = request('tanggal');
        $suratkeluar->perihal = request('perihal');
        $suratkeluar->tujuan = request('tujuan');
        $suratkeluar->id_jenissurat = request('id_jenissurat');
        $suratkeluar->status = 1;
        $suratkeluar->handleUploadFile('file');
        $suratkeluar->save();
        // dd($suratmasuk);
        return redirect('sispi/admin/pengajuan-surat')->with('success', 'Data Berhasil Di Ajukan');
    }
    public function deletePengajuan(SuratKeluar $suratkeluar)
    {
        $suratkeluar->delete();

        return back()->with('danger', 'Data Di Hapus');
    }
    public function destroy($id)
    {
        //
    }
}
