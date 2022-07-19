<x-module.admin>
    
    <div class="container-fluid">
        <x-template.button.back-button url="admin/managment-user/pegawai" />
        <div class="card shadow mb-4">
            <div class="card card-default">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="h2 m-0 font-weight-bold text-secondary">
                            Tambah Data Pegawai
                        </h5>
                    </div>
                </div>
                <hr class="no-margin">
                <div class="card-body">
                    <form action="{{ url('admin/managment-user/pegawai') }}" id="add_form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">NIP</label>
                                    <input type="text" class="form-control" name="nip" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">NIK</label>
                                            <input type="text" class="form-control" name="nik">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hidden" id="periode_tertentu">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" class="control-label">Username</label>
                                                <input type="text" class="form-control" name="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Agama</label>
                                            <input type="text" class="form-control" name="agama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control">
                                                <option value="">Pilihan</option>
                                                <option value="Laki Laki">Laki Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" class="control-label">Unit Kerja</label>
                                                <input type="text" class="form-control" name="unit_kerja">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">No Handpone</label>
                                            <input type="text" class="form-control" name="no_hp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row no-gutters">
                                    <label>Foto</label>
                                    <div class="col-md-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto" id="foto"
                                                accept="image/png,image/jpeg" required>
                                            <label class="custom-file-label " for="customFile">Pilih</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" class="control-label">Gelar Depan</label>
                                                <input type="text" class="form-control" name="gelar_depan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Gelar Belakang</label>
                                            <input type="text" class="form-control" name="gelar_belakang">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Riwayat Pendidikan</h6>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="" class="control-label">SD</label>
                                    <input type="text" class="form-control" name="riwayat[]">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="control-label">SMP</label>
                                    <input type="text" class="form-control" name="riwayat[]">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="control-label">SMA</label>
                                    <input type="text" class="form-control" name="riwayat[]">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="control-label">Perguruan Tinggi</label>
                                    <input type="text" class="form-control" name="riwayat[]">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i>
                            Simpan</button>
                    </form>
                </div>
            </div>
        </div>
</x-module.admin>
