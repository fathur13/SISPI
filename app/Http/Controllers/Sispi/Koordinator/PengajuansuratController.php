<?php

namespace App\Http\Controllers\Sispi\Koordinator;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArsipSurat\SuratKeluar;
use App\Models\Admin\ManagmentData\JenisSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuansuratController extends Controller
{
    public function __invoke()
    {
        $data['list_suratkeluar'] = SuratKeluar::latest()->get();
        return view('sispi.koordinator.pengajuan-surat.index', $data);
    }
    public function index()
    {
        $data['list_suratkeluar'] = SuratKeluar::latest()->get();
        return view('sispi.koordinator.pengajuan-surat.index', $data);
    }
    public function setuju($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->status = 2;
        $suratkeluar->save();
        return redirect('sispi/koordinator/pengajuan-surat')->with('success', 'Data Disetujui');
    }
    public function ditolak($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->status = 3;
        $suratkeluar->save();
        return redirect('sispi/koordinator/pengajuan-surat')->with('danger', 'Data Ditolak');
    }
    public function selesai(Request $request, SuratKeluar $suratkeluar)
    {
        // $suratkeluar->keterangan = request('keterangan');
        $suratkeluar->status = 2;
        $suratkeluar->keterangan = request('keterangan');
        $suratkeluar->handleUploadFile('file');
        $suratkeluar->save();
        // $data = SuratKeluar::findOrFail($id);
        // $data->update($request->all());

        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');
        //     $timestamp = str_replace([' ', ':'], '-', SuratKeluar::now()->toDateTimeString());
        //     $name = $timestamp . '-' . $file->getClientOriginalName();
        //     $data->file = $name;
        //     $file->move(public_path() . '/storage/', $name);
        //     $data->save();
        // }
        // dd($suratkeluar);
        // $this->validate($request, [
        //     'file'     => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // //check if file is uploaded
        // if ($request->hasFile('file')) {

        //     //upload new file
        //     $file = $request->file('file');
        //     $file->storeAs('storage', $file->hashName());

        //     //delete old file
        //     Storage::delete('storage'.$suratkeluar->file);

        //     //update post with new file
        //     $suratkeluar->update([
        //         'file'     => $file->hashName(),
        //     ]);

        // } else {
        // }

        return redirect('sispi/koordinator/pengajuan-surat')->with('success', 'Data Disetujui');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(SuratKeluar $suratkeluar)
    {
        $data['suratkeluar'] = $suratkeluar;
        return view('sispi.koordinator.pengajuan-surat.show', $data);
    }
    public function showditolak(SuratKeluar $suratkeluar)
    {
        $data['suratkeluar'] = $suratkeluar;
        return view('sispi.koordinator.pengajuan-surat.showditolak', $data);
    }
    public function edit(SuratKeluar $suratkeluar)
    {
        $data['suratkeluar'] = $suratkeluar;
        return view('sispi.koordinator.pengajuan-surat.edit', [
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
        return redirect('sispi/koordinator/pengajuan-surat')->with('success', 'Data Berhasil Di Edit');
    }

    public function deletePengajuan(SuratKeluar $suratkeluar)
    {
        $suratkeluar->delete();

        return back()->with('danger', 'Data Berhasil Di Dihapus');
    }
    public function destroy($id)
    {
        //
    }
}
