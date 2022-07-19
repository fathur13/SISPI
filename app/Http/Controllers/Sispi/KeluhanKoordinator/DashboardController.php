<?php

namespace App\Http\Controllers\Sispi\KeluhanKoordinator;

use App\Http\Controllers\Controller;
use App\Models\Keluhan\keluhan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_keluhan = keluhan::all()->count();
        $jumlah_diterima = keluhan::all()->where('status', 2)->count();
        $jumlah_belumdiproses = keluhan::all()->where('status', 1)->count();
        return view('sispi.keluhan-koordinator.dashboard.index')
            ->with('jumlah_keluhan', $jumlah_keluhan)
            ->with('jumlah_diterima', $jumlah_diterima)
            ->with('jumlah_belumdiproses', $jumlah_belumdiproses);
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
