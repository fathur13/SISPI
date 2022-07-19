<x-module.sispi-koordinator>
    <div class="container-xl">
        <x-template.button.back-button url="sispi/koordinator/pengajuan-surat" />

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white font-weight-bold">
                        Detail Pengajuan
                    </div>
                    <div class="card-body">
                        <dt>Perihal</dt>
                        <dd>{{ $suratkeluar->perihal }}</dd>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Nomor Surat</dt>
                                <dd>{{ $suratkeluar->nomorsurat }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Jenis Surat</dt>
                                <dd>{{ $suratkeluar->jenissurat->nama }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tanggal Surat</dt>
                                <dd>{{ $suratkeluar->tanggal_string }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tujuan Surat</dt>
                                <dd>{{ $suratkeluar->tujuan }}</dd>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>File Surat</th>
                                        <th>Draft Surat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <a class="btn btn-square btn-sm btn-outline-dark btn-rounded"
                                            href="{{ url($suratkeluar->file) }}" terget="_blank"
                                            download="">Download Surat</a>
                                    </td>
                                    <td>
                                        <a href="https://simadu.politap.ac.id/simadu-qr"
                                            class="btn btn-square btn-sm btn-outline-dark btn-rounded"
                                            target="blank_">Download QR Code</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-header">
                            Surat
                        </div>
                        <form action="{{ url('sispi/koordinator/pengajuan-surat', $suratkeluar->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col mt-3">
                                    <div class="form-group">
                                        <h5>File Surat <span style="font-size:15px; color:red">pdf*</span> </h5>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="file"
                                                    accept=".pdf">
                                                <label class="custom-file-label">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <div class="form-group">
                                        <h5>Keterangan Surat</h5>
                                        <textarea name="keterangan" class="form-control" cols="20" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-rounded btn-success float-right">Terima
                                        Pengajuan</button>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ url('ditolak', $suratkeluar->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-danger"><span><b>Tolak Pengajuan</b></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.sispi-koordinator>
