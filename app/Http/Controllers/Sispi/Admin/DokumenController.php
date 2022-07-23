<?php

namespace App\Http\Controllers\Sispi\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentData\Kelengkapan;
use App\Models\Sispi\Admin\Dokumen;
use App\Models\Sispi\Admin\ManagmentData\JenisDokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index()
    {
        return view('sispi.admin.dokumen.index', [
            'list_dokumen' =>  Dokumen::latest()->get()
        ]);
    }

    public function create()
    {
        return view('sispi.admin.dokumen.create', [
            'list_kelengkapan' => Kelengkapan::all(),
            'list_jenisdokumen' => JenisDokumen::all(),
            'list_dokumen' => Dokumen::all()
        ],);
    }

    function store(Request $request)
    {
        $rules = [
            'nomor_spm' => 'required',
            'tanggal' => 'required',
            'uraian' => 'required',
            'besaran_spm' => 'required',
            'id_jenisdokumen' => 'required',
            'kelengkapan' => 'required',
            'file' => 'required|max:100000|mimes:pdf, zip, rar',

        ];
        $text = [
            'id_jenisdokumen.required' => ' Jenis dokumen wajib di isi',
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor dokumen sudah ada',
            'max' => ' :attribute terlalu besar',
        ];
        $this->validate($request, $rules, $text);

        $dokumen = new Dokumen;
        $dokumen->nomor_spm = request('nomor_spm');
        $dokumen->tanggal = request('tanggal');
        $dokumen->uraian = request('uraian');
        $dokumen->besaran_spm = request('besaran_spm');
        $dokumen->id_kelengkapan = join(",", request('kelengkapan'));
        $dokumen->id_jenisdokumen = request('id_jenisdokumen');
        $dokumen->handleUploadFile('file');
        $dokumen->save();

        return redirect('sispi/admin/dokumen')->with('success', 'Data Ditambahkan');
    }

    public function show(Dokumen $dokuman)
    {
        $data['dokuman'] = $dokuman;
        $data['list_dokumen'] = Dokumen::all();
        return view('sispi.admin.dokumen.show', $data);
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
