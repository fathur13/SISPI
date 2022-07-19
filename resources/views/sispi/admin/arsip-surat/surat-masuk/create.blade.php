<x-module.sispi-admin>
    <div class="container-fluid">
        <x-template.button.back-button url="sispi/admin/surat-masuk" />
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary ">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2 m-0 font-weight-bold text-white">Tambah Arsip Surat Masuk</h2>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('sispi/admin/surat-masuk') }}" id="add_form" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nomor Surat</label>
                                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror"
                                    name="nomor_surat" value="{{ old('nomor_surat') }}">
                                @error('nomor_surat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Surat</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror"
                                    value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Perihal</label>
                                <input type="text" class="form-control @error('perihal') is-invalid @enderror"
                                    name="perihal" value="{{ old('perihal') }}">
                                @error('perihal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Asal Surat</label>
                                <input type="text" class="form-control @error('asal') is-invalid @enderror"
                                    name="asal" value="{{ old('asal') }}">
                                @error('asal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Berkas Surat Masuk </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('file') is-invalid @enderror"
                                    name="file" id="file" accept=".pdf">
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-label" for="customFile">Pilih</label>
                                <div class="text-danger" for="file">
                                    <p style="font-size: 13px">Berkas PDF*</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Surat</label>
                                <select class="form-control @error('id_jenissurat') is-invalid @enderror"
                                    name="id_jenissurat">
                                    <option value="" @if (old('id_jenissurat') == '' or old('id_jenissurat') == 0) selected='selected' @endif>
                                        Pilihan Jenis Surat
                                    </option>
                                    @foreach ($list_jenissurat as $jenissurat)
                                        <option value='{{ $jenissurat->id }}'
                                            @if (old('id_jenissurat') == $jenissurat->id) selected="selected" @endif>
                                            {{ $jenissurat->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_jenissurat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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

</x-module.sispi-admin>
