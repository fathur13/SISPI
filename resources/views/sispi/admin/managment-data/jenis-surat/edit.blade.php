<x-module.sispi-admin>
    <div class="container-xl">
        <x-template.button.back-button url="sispi/admin/jenis-surat" />
        <div class="card shadow mb-4">
        <div class="card card-default">
            <div class="card-header bg-secondary">
                <h2 class=" m-0 font-weight-bold text-white">Edit Jenis Surat
            </div>
            <hr class="no-margin">
            <div class="card-body">
                <form action="{{ url('sispi/admin/jenis-surat', $jenis_surat->id) }}" id="add_form" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Jenis Surat</label>
                                <input class="form-control" name="nama" value="{{ $jenis_surat->nama }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</x-module.sispi-admin>