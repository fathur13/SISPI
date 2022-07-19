<?php

namespace App\Http\Controllers\Admin\ManagmentUser;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentUser\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.managment-user.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('admin.managment-user.mahasiswa.create');
    }

    public function store()
    {
        Mahasiswa::create(request()->only('nim', 'nama'));
        return redirect('admin/managment-user/mahasiswa');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.managment-user.mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->nama = request('nama');
        $mahasiswa->nim = request('nim');
        $mahasiswa->password = request('password');
        $mahasiswa->save();

        return redirect('admin/managment-user/mahasiswa');
    }
}
