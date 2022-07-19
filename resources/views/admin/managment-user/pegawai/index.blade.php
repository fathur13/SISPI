<x-module.admin>
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
    <div class="container-fluid">
        <h1 style="padding-left:10px">Managment User</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="h2 m-0 font-weight-bold text-secondary">Data Pegawai
                    <a href="{{ url('admin/managment-user/pegawai/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus ml-2"></i> Tambah Data</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead>
                            <tr style="text-align:center">
                                <th class="col-md-1">NO</th>
                                <th class="col-md-4" style="text-align:left">NIP & NUP</th>
                                <th class="col-md-3">Nama</th>
                                <th width="100px" class="col-md-2">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pegawai as $pegawai)
                                <tr style="text-align:center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="text-align:left">{{ $pegawai->nip }} {{ $pegawai->nup }}</td>
                                    <td>{{ $pegawai->nama }}
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="admin/managment-user/pegawai"
                                                id="{{ $pegawai->id }}" />
                                            <x-template.button.edit-button url="admin/managment-user/pegawai"
                                                id="{{ $pegawai->id }}" />
                                            <a href="{{ url('admin/managment-user/pegawai/delete-pegawai', $pegawai->id) }}"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </x-siipin>
