<?php

namespace App\Http\Controllers;

use App\Models\Admin\ManagmentUser\Pegawai;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function profile()
    {
        return view('sispi.profile');
    }
    public function editprofile(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('sispi.edit-profile', $data);
    }
    public function updateProfile(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nup = request('nup');
        $pegawai->nama = request('nama');
        $pegawai->email = request('email');
        // $pegawai->username = request('username');
        // $pegawai->nik = request('nik');
        $pegawai->nup = request('nup');
        $pegawai->nik_ktp = request('nik_ktp');
        // $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->tempat_lahir = request('tempat_lahir');
        // $pegawai->no_hp = request('no_hp');
        $pegawai->gelar_depan = request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        // $pegawai->riwayat = join(",", request('riwayat'));
        $pegawai->handleUploadFile('foto');
        $pegawai->save();
        if (request('password')) $pegawai->password = request('password');
        $pegawai->save();

        return redirect('sispi/profile')->with('success', 'Data Berhasil Di Edit');
    }

    public function loginProcess()
    {



        $guard = null;
        $userid = request('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen == 18) {
                $field = 'nip';
            }else if ($strlen == 17) {
                $field = 'nup';
            }else if ($strlen == 10) {
                $field = 'nim';
                $guard = 'mahasiswa';
            } else {
                $field = 'username';
            }
        }

        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;

        if ($guard) {
            if (auth()->guard('mahasiswa')->attempt($credential, $remember)) {
                $user = auth()->user();
                return redirect('mahasiswa');
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        } else {
            if (auth()->attempt($credential, $remember)) {
                $user = auth()->user();
                return $this->manageRedairect($user);
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        }
    }


    public function logout()
    {
        auth()->logout();
        auth()->guard('mahasiswa')->logout();

        return redirect('login');
    }

    public function manageRedairect($user)
    {
        $list_role = $user->role;
        $firstRole = $list_role->first();
        $url = $firstRole->module->url;
        return redirect($url);
    }
}
