<x-module.admin>
    <div class="container-fluid">
        <x-template.button.back-button url="admin/managment-user/pegawai"/>
                    <div class="card shadow mb-4">
                        <div class="card-body" style="padding: 80px">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="">
                                        <div class="card">
                                            @if ($pegawai->foto)
                                            <img src="{{url('public',$pegawai->foto) }}"
                                            class="img-fluid profile-pic-container" style="width: 100%">
                                            @else
                                            <img src="{{url('public/assets') }}/img/profile.jpg"
                                            class="img-fluid profile-pic-container" style="width: 100%">
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h2 class="h2 m-0 font-weight-bold text-secondary">
                                                <div class=" float-left">
                                                    Data 
                                                    {{ $pegawai->unit_kerja }}
                                                </div> 
                                                <div class=" float-right">
                                                    <x-template.button.edit-button url="admin/managment-user/pegawai"
                                                    id="{{ $pegawai->id }}" />
                                                </div>
                                            </h2>
                                        </div>
                                        <hr class="no-margin">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Nama
                                                                Lengkap</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->unit_kerja }}
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">NIP</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->nip }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">NIK</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->nik }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Unit
                                                                Kerja</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->unit_kerja }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Tempat
                                                                Lahir</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->tempat_lahir }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">No HP</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->no_hp }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Gelar
                                                                Depan</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->gelar_depan }}
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Gelar
                                                                Belakang</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->gelar_belakang }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Jenis
                                                                Kelamin</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->jenis_kelamin }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Agama</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->agama }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Tanggal
                                                                Lahir</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ $pegawai->tanggal_lahir }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="no-margin">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="" class="control-label col-md-12"
                                                        style="text-align: center">Riwayat Pendidikan :</label>
                                                    <div class="row">
                                                        <label for="" class="control-label col-md-3">SD</label>
                                                        <label for="" class="control-label col-md-3">SMP</label>
                                                        <label for="" class="control-label col-md-3">SMA</label>
                                                        <label for="" class="control-label col-md-3">Perguruan
                                                            Tinggi</label>
                                                    </div>
                                                    <div class="row">
                                                        @foreach (explode(',', $pegawai->riwayat) as $h)
                                                            <label for=""
                                                                class="control-label col-md-3">{{ $h }}</label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade slide-right" id="modalConfirmDelete" tabindex="-1" role="dialog"
                                style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content-wrapper">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true"><i class="pg-close fs-14"></i></button>
                                            <div class="container-xs-height full-height">
                                                <div class="row-xs-height">
                                                    <div class="modal-body col-xs-height col-middle text-center">
                                                        <h5 class="text-danger">Yakin Menghapus Data Ini?</h5>
                                                        <br>
                                                        <small class="text-default">Data yang telah dihapus tidak
                                                            akan
                                                            dapat dikembalikan</small>
                                                        <br>
                                                        <br>
                                                        <a href="#" id="btn_delete_conf" data-method="delete"
                                                            data-token="njuftNBw4Y2NcdrVNFqg39cVyrCEc0sxDQ6AKfwT"
                                                            class="btn btn-danger btn-block">Continue</a>
                                                        <button type="button" class="btn btn-default btn-block"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</x-module.admin>
