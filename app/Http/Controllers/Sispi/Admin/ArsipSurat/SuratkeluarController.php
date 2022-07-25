<?php

namespace App\Http\Controllers\Sispi\Admin\ArsipSurat;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArsipSurat\SuratKeluar;
use App\Models\Admin\ArsipSurat\SuratMasuk;
use App\Models\Admin\ManagmentData\JenisSurat;
use App\Models\Admin\ManagmentData\Kelengkapan;
use App\Models\Admin\ManagmentData\TemplateSurat;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\mysql_num_rows;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('sispi.admin.arsip-surat.surat-keluar.index', [
            'list_suratkeluar' =>  SuratKeluar::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SuratKeluar $suratkeluar)
    {


        $cek = Suratkeluar::count();
        if ($cek == 0) { //nomor otomatis
            $urut = 01;
            $digunakan = 'kosong';
            $tahun = date('Y');
            $nomor = $urut . '/PL39.18/../../' . $tahun;
            // dd($nomor);
        } else {
            $ambil = Suratkeluar::all()->last();
            $urut = (int)substr($ambil->nomorsurat, -25) + 1;
            $digunakan = (int)substr($ambil->nomorsurat, -25) + 0;
            $tahun = date('Y');
            $nomor = $urut . '/PL39.18/../../' . $tahun;
        }

        $data['suratkeluar'] = $suratkeluar;

        return view('sispi.admin.arsip-surat.surat-keluar.create',  compact('nomor', 'digunakan'), [
            'list_kelengkapan' => Kelengkapan::all(),
            'list_jenissurat' => JenisSurat::all(),
            'list_suratmasuk' => SuratMasuk::all(),
            'list_templatesurat' => Templatesurat::all()
        ],);
    }

    public function store(Request $request)
    {
        $rules = [
            'nomorsurat' => 'required|unique:admin__suratkeluar',
            'tanggal' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'id_jenissurat' => 'required',
            'file' => 'required|max:1000|mimes:docx'
        ];
        $messages = [
            'id_jenissurat.required' => ' Jenis surat wajib di isi',
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor surat sudah ada',
            'max' => ' :attribute terlalu besar',
        ];
        $this->validate($request, $rules, $messages);

        // $suratkeluar = SuratKeluar::all();
        // $nomorsurat = $suratkeluar->nomorsurat;
        // $segmented = explode("/", $nomorsurat);
        // $nomorsurat = $segmented[0];
        // $tahun_surat = end($segmented);


        $suratkeluar = new SuratKeluar();
        $suratkeluar->nomorsurat = request('nomorsurat');
        $suratkeluar->tanggal = request('tanggal');
        $suratkeluar->perihal = request('perihal');
        $suratkeluar->tujuan = request('tujuan');
        $suratkeluar->id_jenissurat = request('id_jenissurat');
        $suratkeluar->status = 1;
        $suratkeluar->handleUploadFile('file');
        $suratkeluar->handleUploadFile('file_kelengkapan');
        $suratkeluar->save();

        // dd($suratkeluar);


        return redirect('sispi/admin/surat-keluar')->with('success', 'Data Di Ajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeluar $SuratKeluar)
    {
        $data['suratkeluar'] = $SuratKeluar;
        return view('sispi.admin.arsip-surat.surat-keluar.show', $data);
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
