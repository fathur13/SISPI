<?php

namespace App\Http\Controllers\Sispi\Admin\ArsipSurat;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArsipSurat\SuratMasuk;
use App\Models\Admin\ManagmentData\Jenissurat;
use App\Models\Admin\ManagmentData\Kelengkapan;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    public function __invoke()
    {
        return view('sispi.admin.arsip-surat.surat-masuk.index', [
            'list_suratmasuk' =>  SuratMasuk::latest()->get()
        ]);
    }
    public function index()
    {

        return view('sispi.admin.arsip-surat.surat-masuk.index', [
            'list_suratmasuk' =>  SuratMasuk::latest()->get()
        ]);
    }
    public function create()
    {
        return view('sispi.admin.arsip-surat.surat-masuk.create', [
            'list_kelengkapan' => Kelengkapan::all(),
            'list_jenissurat' => Jenissurat::all()
        ]);
    }
    public function store(Request $request)
    {
        $rules=[
            'nomor_surat'=>'required|unique:admin__suratmasuk',
            'tanggal'=>'required',
            'perihal'=>'required',
            'asal'=>'required', 
            'id_jenissurat'=>'required',
            'file'=>'required|max:1000|mimes:pdf'
        ];
        $messages=[
            'id_jenissurat.required'=>' Jenis surat wajib di isi',
            'required'=> ' :attribute wajib di isi',
            'unique'=>' Nomor surat sudah ada',
            'max'=>' :attribute terlalu besar',
        ];
        $this->validate( $request, $rules, $messages);

        $suratmasuk = new Suratmasuk;
        $suratmasuk->nomor_surat = request('nomor_surat');
        $suratmasuk->tanggal = request('tanggal');
        $suratmasuk->perihal = request('perihal');
        $suratmasuk->asal_surat = request('asal');
        $suratmasuk->id_jenissurat = request('id_jenissurat');
        $suratmasuk->handleUploadFile('file');
        $suratmasuk->save();


        // dd($suratmasuk);
        return redirect('sispi/admin/surat-masuk')->with('success', 'Data Di Tamabahkan');

    }
    public function show(SuratMasuk $SuratMasuk)
    {
        $data['suratmasuk'] = $SuratMasuk;
        return view('sispi.admin.arsip-surat.surat-masuk.show', $data);
    }
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
