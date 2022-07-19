<x-module.sispi-admin>
    <div class="container-fluid">
        <h1 style="padding-left:10px">ARSIP SURAT</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">
                <h5 class="h2 m-0 font-weight-bold text-white">Arsip Surat Masuk
                    <a href="{{ url('sispi/admin/surat-masuk/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus ml-2"></i> Tambah Arsip</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th style="width: 1%">NO</th>
                                <th class="col-md-1">AKSI</th>
                                <th class="col-md-4" style="text-align:left">PERIHAL</th>
                                <th class="col-md-3">
                                    NOMOR SURAT
                                </th>
                                <th class="col-md-2">ASAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_suratmasuk as $suratmasuk)
                                    <tr style="text-align:center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="sispi/admin/surat-masuk"
                                                    id="{{ $suratmasuk->id }}" />
                                            </div>
                                        </td>
                                        <td style="text-align:left">{{ $suratmasuk->perihal }}</td>
                                        </td>
                                        <td>
                                            {{ $suratmasuk->nomor_surat }}
                                        </td>
                                        <td>{{ $suratmasuk->asal_surat }}
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
    </x-module.admin>
