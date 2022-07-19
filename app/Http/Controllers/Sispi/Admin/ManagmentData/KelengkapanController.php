<?php

namespace App\Http\Controllers\Sispi\Admin\ManagmentData;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentData\Jenissurat;
use App\Models\Admin\ManagmentData\Kelengkapan;
use Illuminate\Http\Request;

class KelengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sispi.admin.managment-data.kelengkapan.index', [
            'list_kelengkapan' => Kelengkapan::latest()->get(),
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
        $jenissurat = new Kelengkapan();
        $jenissurat->nama = request('nama');
        $jenissurat->save();


        return redirect('sispi/admin/kelengkapan')->with('success', 'Data Berhasil Di Tambahkan ');
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
    public function edit(Kelengkapan $kelengkapan)
    {
        $data['kelengkapan'] = $kelengkapan;
        return view('sispi.admin.managment-data.kelengkapan.edit', $data);
    }
    public function update(Kelengkapan $kelengkapan)
    {
        $kelengkapan->nama = request('nama');
        $kelengkapan->save();

        return redirect('sispi/admin/kelengkapan')->with('success', 'Data Berhasil Di Edit');
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
    public function deleteKelengkapan(Kelengkapan $kelengkapan)
    {
        $kelengkapan->delete();
        
        return back();
    }
}
