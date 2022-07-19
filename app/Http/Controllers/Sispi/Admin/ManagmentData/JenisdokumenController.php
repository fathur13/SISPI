<?php

namespace App\Http\Controllers\Sispi\Admin\ManagmentData;

use App\Http\Controllers\Controller;
use App\Models\Sispi\Admin\ManagmentData\JenisDokumen;
use Illuminate\Http\Request;

class JenisdokumenController extends Controller
{
    public function index()
    {
        return view('sispi.admin.managment-data.jenis-dokumen.index', [
            'list_jenisdokumen' => JenisDokumen::latest()->get()
        ]);
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
        $jenisdokumen = new JenisDokumen();
        $jenisdokumen->nama = request('nama');
        $jenisdokumen->save();


        return redirect('sispi/admin/jenis-dokumen')->with('success', 'Data Ditambahkan');
    }

    public function show()
    {
    }

    public function edit(JenisDokumen $jenis_dokuman)
    {
        $data['jenis_dokuman'] = $jenis_dokuman;
        return view('sispi.admin.managment-data.jenis-dokumen.edit', $data);
    }
    public function update(JenisDokumen $jenis_dokuman)
    {
        $jenis_dokuman->nama = request('nama');
        $jenis_dokuman->save();

        return redirect('sispi/admin/jenis-dokumen')->with('success', 'Data Berhasil Di Edit');
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
