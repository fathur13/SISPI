<x-module.sispi-admin>
    <div class="container-xl">
        <x-template.button.back-button url="sispi/admin/template-surat" />
        <div class="card shadow mb-4">
            <div class="card card-default">
                <div class="card-header bg-secondary">
                    <h2 class=" m-0 font-weight-bold text-white">Edit Template Surat
                </div>
                <hr class="no-margin">
                <div class="card-body">
                    <form action="{{ url('sispi/admin/template-surat', $templateSurat->id) }}" id="add_form"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <div class="form-group">
                                    <label for="" class="control-label">Nama Template Surat</label>
                                    <input class="form-control" name="nama" value="{{ $templateSurat->nama }}">
                                </div> --}}
                                <label>Berkas Template</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file_template_surat"
                                        value="{{ $templateSurat->file_template_surat }}" id="filetemplate"
                                        accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                    <label class="custom-file-label " for="customFile">Pilih</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <button class="btn btn-success float-right"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-module.sispi-admin>
