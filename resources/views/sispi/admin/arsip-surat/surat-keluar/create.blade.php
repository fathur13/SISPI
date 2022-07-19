<x-module.sispi-admin>
    <div class="container-fluid">
        <x-template.button.back-button url="sispi/admin/surat-keluar" />
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2 m-0 font-weight-bold text-white">Tambah Arsip Surat Keluar</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="dropdown float-right floa">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Download Template Surat Keluar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                @foreach ($list_templatesurat as $templatesurat)
                                    <a href="{{ url("$templatesurat->file_template_surat") }}" terget="_blank"
                                        download=""><button
                                            class="btn " style="font-size: 12px; "  ><i class="fa fa-download"></i>
                                            {{ $templatesurat->nama }}</button>
                                    </a><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('sispi/admin/surat-keluar') }}" id="add_form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nomor Surat</label>
                                <input type="text" class="form-control @error('nomorsurat') is-invalid @enderror" name="nomorsurat" value="{{ $nomor }}">
                                <div class="text-warning" for="namorsurat">
                                    <p style="font-size: 13px"> Nomor Surat terakhir "{{ $digunakan }}"</p>
                                </div>
                                @error('nomorsurat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Surat</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
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
                                <input type="text" class="form-control @error('perihal') is-invalid @enderror" name="perihal" value="{{ old('perihal') }}">
                                @error('perihal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tujuan Surat</label>
                                <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ old('tujuan') }}">
                                @error('tujuan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Berkas Surat Keluar </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('file') is-invalid @enderror" name="file" id="file"
                                    accept=".docx" >
                                    @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <label class="custom-file-label" for="customFile">Pilih</label>
                                <div class="text-danger" for="file">
                                    <p style="font-size: 13px">Berkas WORD*</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Surat</label>
                                <select class="form-control @error('id_jenissurat') is-invalid @enderror" name="id_jenissurat" >
                                    <option value="" @if (old('id_jenissurat')=='' or old('id_jenissurat')==0) selected='selected' @endif>Pilihan Jenis Surat
                                    </option>
                                    @foreach ($list_jenissurat as $jenissurat)
                                        <option value='{{ $jenissurat->id }}' @if (old('id_jenissurat')==$jenissurat->id) selected="selected" @endif>
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


    <script>
        $(document).ready(function() {
            $(".add_kelengkapan_btn").click(function(e) {
                e.preventDefault();
                $("#show_kelengkapan").prepend('<div class="row">\
                    <div class="col-md-6">\
                            <div class="row">\
                                <div class="col-10">\
                                <select class="form-control" name="kelengkapan[]">\
                                    <option value="">Pilihan Kelengkapan Surat\
                                    </option>\
                                    @foreach ($list_kelengkapan as $kelengkapan)\
                                        <option value="{{ $kelengkapan->nama }}">\
                                            {{ $kelengkapan->nama }}\
                                        </option>\
                                    @endforeach\
                                </select>\
                            </div>\
                                <div class="col-md-2 mb-3 d-grid">\
                                <button type="button" style="padding: 5px 14px;" class="btn btn-outline-danger remove_kelengkapan_btn">Hapus</button>\
                            </div>\
                        </div>\
                    </div>\
                </div>');
            });

            $(document).on('click', '.remove_kelengkapan_btn', function(e) {
                e.preventDefault();
                let row_kelengkapan = $(this).parent().parent();
                $(row_kelengkapan).remove();
            });
        });
    </script>
</x-module.sispi-admin>