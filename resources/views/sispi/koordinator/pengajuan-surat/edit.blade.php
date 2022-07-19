<x-module.sispi-koordinator>
    <div class="container-fluid">
        <x-template.button.back-button url="sispi/koordinator/pengajuan-surat" />
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary">
                <h5 class="h2 m-0 font-weight-bold text-white">Edit Pengajuan Surat Keluar</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('sispi/koordinator/update', $suratkeluar->id) }}" id="add_form"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nomor Surat</label>
                                <input type="text" class="form-control" name="nomorsurat"
                                    value="{{ $suratkeluar->nomorsurat }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Surat</label>
                                <input type="date" name="tanggal" class="form-control"
                                    value="{{ $suratkeluar->tanggal }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Perihal</label>
                                <input type="text" class="form-control" name="perihal"
                                    value="{{ $suratkeluar->perihal }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">tujuan Surat</label>
                                <input type="text" class="form-control" name="tujuan"
                                    value="{{ $suratkeluar->tujuan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Berkas Surat Masuk</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="file"
                                    accept="application/pdf">
                                <label class="custom-file-label" for="customFile">Pilih Berkas </label>
                                <div class="text-danger" for="file">
                                    <p style="font-size: 13px">Wajib Masukan Kembali Berkas WORD*</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Surat</label>
                                <select class="form-control " name="id_jenissurat">
                                    <option value="{{ $suratkeluar->jenissurat->id }}">
                                        {{ $suratkeluar->jenissurat->nama }}
                                    </option>
                                    @foreach ($list_jenissurat as $jenissurat)
                                        <option value='{{ $jenissurat->id }}'>
                                            {{ $jenissurat->nama }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    <button type="" class="btn btn-success float-right" data-toggle="modal"
                        data-target=".bd-example-modal-sm"><i class="fa fa-save"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-module.sispi-koordinator>
