<x-module.sispi-admin>
    <div class="container-xl">
        <h1 style="padding-left:10px">MANAGMENT DATA</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">
                <h5 class="h2 m-0 font-weight-bold text-white">Kelengkapan Dokumen
                    <button type="button" class="btn btn-dark float-right" data-toggle="modal"
                        data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i>
                        Tambah</button>
                </h5>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-secondary text-white">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kelengkapan Dokumen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('sispi/admin/kelengkapan') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="control-label">Nama kelengkapan Dokumen</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="float-right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-success " placeholder="Masukkan nama">simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th class="col-md-1">NO</th>
                                <th class="col-md-20" style="text-align:left">NAMA</th>
                                {{-- <th class="col-md-3">AKSI</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kelengkapan as $kelengkapan)
                                <tr style="text-align:center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="text-align:left">{{ $kelengkapan->nama }}</td>
                                    {{-- <td>
                                        <div class="btn-group">
                                            <x-template.button.edit-button url="sispi/admin/kelengkapan"
                                                id="{{ $kelengkapan->id }}" />
                                            </a>
                                            <a href="{{ url('sispi/admin/kelengkapan/delete-kelengkapan', $kelengkapan->id) }}"
                                                class="btn btn-danger"><i class="fa fa-trash"> </i></a>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(function() {
            $("#dataTable").DataTable({
                "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                    "sEmptyTable": "Tidak ada data di database"
                }
            });

        });
    </script>
</x-module.sispi-admin>
