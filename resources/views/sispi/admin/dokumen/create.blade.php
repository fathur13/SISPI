<x-module.sispi-admin>

    <div class="container-fluid">
        <x-template.button.back-button url="sispi/admin/dokumen" />
        <div class="card shadow mb-4">

            <div class="card-header bg-secondary">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="m-0 font-weight-bold text-white">Tambah Berkas Dokumen</h2>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('sispi/admin/dokumen') }}" id="add_form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nomor SPM</label>
                                <input type="text" class="form-control @error('nomor_spm') is-invalid @enderror" value="{{ old('nomor_spm') }}" name="nomor_spm" >
                                @error('nomor_spm')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal</label>
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
                                <label for="" class="control-label">Uraian</label>
                                <input type="text" class="form-control @error('uraian') is-invalid @enderror" name="uraian" value="{{ old('uraian') }}">
                                @error('uraian')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Besaran SPM</label>
                                <input type="text" class="form-control @error('besaran_spm') is-invalid @enderror" name="besaran_spm" value="{{ old('besaran_spm') }}">
                                @error('besaran_spm')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label>Berkas  Dokumen</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('file') is-invalid @enderror" name="file"
                                    id="file" accept=".pdf,.zip,.rar,.7zip">
                                    @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <label class="custom-file-label" for="file">Pilih</label>
                                <div class="text-danger" for="file">
                                    <p style="font-size: 13px"> Di satukan dalam Pdf, Zip, Rar, 7zip, dll*</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Dokumen </label>
                                <select class="form-control @error('id_jenisdokumen') is-invalid @enderror" name="id_jenisdokumen" id="kelas1" >
                                    <option value="" @if (old('id_jenisdokumen')=='' or old('id_jenisdokumen')==0) selected='selected' @endif>Pilihan Jenis Dokumen
                                    </option>
                                    @foreach ($list_jenisdokumen as $jenisdokumen)
                                        <option value='{{ $jenisdokumen->id }}' @if (old('id_jenisdokumen')==$jenisdokumen->id) selected="selected" @endif>
                                            {{ $jenisdokumen->nama }}
                                        </option>
                                    @endforeach
                                    <option value="lainnya">lainnya</option>
                                </select>
                                @error('id_jenisdokumen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-10">
                                    <label for="" class="control-label">Jenis Kelengkapan</label>
                                </div>
                                <div class="col-2">
                                    <label for="">Aksi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-10">
                                        <select class="form-control" name="kelengkapan[]">
                                            <option value="">Pilihan Kelengkapan Dokumen
                                            </option>
                                            @foreach ($list_kelengkapan as $kelengkapan)
                                                <option value='{{ $kelengkapan->nama }}' >
                                                    {{ $kelengkapan->nama }}
                                                </option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button type="button" style="padding: 5px 14px;"
                                        class="btn btn-outline-danger remove_kelengkapan_btn">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="show_kelengkapan">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-10">
                                        <select class="form-control" name="kelengkapan[]" >
                                            <option value="lainnya">Pilihan Kelengkapan Dokumen
                                            </option>
                                            @foreach ($list_kelengkapan as $kelengkapan)
                                            <option value='{{ $kelengkapan->nama }}'>
                                                {{ $kelengkapan->nama }}
                                            </option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button type="button" style="padding: 5px 9px;"
                                        class="btn btn-outline-success add_kelengkapan_btn">Tambah</button>
                                    </div>
                                </div>
                                
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

            $('#kelas2').hide();
            $('#kelas1').on("change", function() {
                // $('#kelas1').prop('selectedIndex', 'pilih')
                if ($(this).val() === "lainnya") {
                    $('#kelas2').show();
                    // console.log('aria');
                } else {
                    $('#kelas2').hide();
                }
            })
        });

        $(document).ready(function() {
            $(".add_kelengkapan_btn").click(function(e) {
                e.preventDefault();
                $("#show_kelengkapan").prepend('<div class="row">\
                    <div class="col-md-3">\
                            <div class="row">\
                                <div class="col-10">\
                                <select class="form-control" name="kelengkapan[]">\
                                    <option value="">Pilihan Kelengkapan Dokumen\
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