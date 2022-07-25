
    <x-module.sispi-keluhan-koordinator>
        <div class="container-xl">
            <x-template.button.back-button url="sispi/keluhan-koordinator/keluhan" />
    
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-secondary text-white font-weight-bold">
                            Detail Keluhan
                        </div>
                        <div class="card-body">
                            <dt>Judul Keluhan</dt>
                            <dd>{{ $keluhan->judul }}</dd>
                            <div class="row">
                                <div class="col-md-6">
                                    <dt>Nama Pengirim</dt>
                                    <dd>{{ $keluhan->nama }}</dd>
                                </div>
                                <div class="col-md-6">
                                    <dt>Email Pengirim</dt>
                                    <dd>{{ $keluhan->email }}</dd>
                                </div>
                                <div class="col-md-6">
                                    <dt>Jenis Keluhan</dt>
                                    <dd>{{ $keluhan->jenislaporan->nama }}</dd>
                                </div>
                                <div class="col-md-6">
                                    <dt>Tanggal</dt>
                                    <dd>{{ $keluhan->tanggal }}</dd>
                                </div>
                                <div class="col-md-6">
                                    <dt>Lokasi Keluhan</dt>
                                    <dd>{{ $keluhan->lokasi }}</dd>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>ISI KELUHAN</th>
                                            <th style="width: 20%; text-align:center">FILE KELUHAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>
                                            {{ $keluhan->isi }}
                                        </td>
                                        <td style="text-align: center">
                                            <a class="btn btn-square btn-sm btn-outline-dark btn-rounded" terget="popup"
                                                onclick="window.open('{{ url('public'). $keluhan->file }}','popup','width=800,height=600'); return false;">Download
                                                </a>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('proses', $keluhan->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col mt-3">
                                        <div class="form-group">
                                            <h5>Keterangan Keluhan</h5>
                                            <textarea name="keterangan" class="form-control" cols="20" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center">
                                        @if ($keluhan->status == 1)
                                        <button class="btn btn-rounded btn-success " >Terima
                                            Pengajuan</button>
                                        @endif
                                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-module.sispi-keluhan-koordinat>
    
