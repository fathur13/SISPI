<?php

namespace App\Http\Controllers\Sispi\KeluhanKoordinator;

use App\Http\Controllers\Controller;
use App\Mail\NotifKeluhanSucces;
use App\Models\Keluhan\keluhan;
use App\Models\Sispi\KeluhanKoordinator\JenisLaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KeluhanController extends Controller
{
    public function index()
    {
        return view('sispi.keluhan-koordinator.keluhan.index', [
            'list_keluhan' =>  keluhan::latest()->get(),
            'list_jenislaporan' => JenisLaporan::all(),
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
        //
    }
    public function proses($id)
    {
        $keluhan = keluhan::find($id);
        $keluhan->keterangan = request('keterangan');
        $keluhan->status = 2;
        $keluhan->save();

        Mail::to($keluhan->email)->send(new NotifKeluhanSucces);
        return redirect('sispi/keluhan-koordinator/keluhan')->with('success', 'Data Akan Di Proses');
    }
    public function show(keluhan $keluhan)
    {
        $data['keluhan'] = $keluhan;
        return view('sispi.keluhan-koordinator.keluhan.show', $data);
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
