<?php

namespace App\http\Controllers\Admin\ManagmentUser;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentUser\Pegawai;
use App\Models\Admin\ManagmentUser\Role;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.managment-user.pegawai.index', $data);
    }
    public function create()
    {
        return view('admin.managment-user.pegawai.create');
    }
    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        $pegawai->password = request('password');
        $pegawai->nik = request('nik');
        $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->no_hp = request('no_hp');
        $pegawai->gelar_depan = request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->riwayat = join(",", request('riwayat'));
        $pegawai->handleUploadFile('foto');
        $pegawai->save();

        return redirect('admin/managment-user/pegawai');
    }
    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.managment-user.pegawai.show', $data);
    }
    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.managment-user.pegawai.edit', $data);
    }
    public function update(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        $pegawai->nik = request('nik');
        $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->no_hp = request('no_hp');
        $pegawai->gelar_depan = request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->riwayat = join(",", request('riwayat'));
        $pegawai->handleUploadFile('foto');
        $pegawai->save();
        if (request('password')) $pegawai->password = request('password');
        $pegawai->save();

        return redirect('admin/managment-user/pegawai');
    }
    public function deletePegawai(Pegawai $pegawai)
    {
        $pegawai->delete();

        $list_role = Role::where('id_pegawai', $pegawai->id)->get();
        if ($list_role->count() > 0) {
            $list_role->each(function ($role) {
                $role->delete();
            });
        }

        return back();
    }
}
