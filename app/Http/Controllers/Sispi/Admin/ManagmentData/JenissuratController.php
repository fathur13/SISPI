<?php

namespace App\Http\Controllers\Sispi\Admin\ManagmentData;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentData\Jenissurat;
use Illuminate\Http\Request;

class JenissuratController extends Controller
{
    public function index()
    {
        return view('sispi.admin.managment-data.jenis-surat.index', [
            'list_jenissurat' => Jenissurat::latest()->get()
        ]);
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
        $jenissurat = new Jenissurat;
        $jenissurat->nama = request('nama');
        $jenissurat->save();


        return redirect('sispi/admin/jenis-surat')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        //
    }
    public function edit(Jenissurat $jenis_surat)
    {
        $data['jenis_surat'] = $jenis_surat;
        return view('sispi.admin.managment-data.jenis-surat.edit', $data);
    }
    public function update(Jenissurat $jenis_surat)
    {
        $jenis_surat->nama = request('nama');
        $jenis_surat->save();

        return redirect('sispi/admin/jenis-surat')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteJenissurat(Jenissurat $jenissurat)
    {
        $jenissurat->delete();
        
        return back();
    }
}
