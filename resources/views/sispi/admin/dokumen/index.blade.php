<x-module.sispi-admin>
    <div class="container-fluid">
        <h1 style="padding-left:10px">Dokumen</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">
                <h4 class="h2 m-0 font-weight-bold text-white">Data Dokumen
                    <a href="{{ url('sispi/admin/dokumen/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus ml-2"></i> Tambah Dokumen</a>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th class="col-md-1">NO</th>
                                <th class="col-md-1">AKSI</th>
                                <th class="col-md-4" style="text-align:left">URAIAN</th>
                                <th class="col-md-3">
                                    NOMOR SPM
                                </th>
                                <th class="col-md-2">TANGGAL</th>
                                {{-- <th class="col-md-2">KELENGKAPAN</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_dokumen as $dokumen)
                                <tr style="text-align:center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="sispi/admin/dokumen"
                                                id="{{ $dokumen->id }}" />
                                        </div>
                                    </td>
                                    <td style="text-align:left">{{ $dokumen->uraian }}</td>
                                    </td>
                                    <td>
                                        {{ $dokumen->nomor_spm }}
                                    </td>
                                    <td>{{ $dokumen->tanggal }}</td>
                                    {{-- <td>
                                        @foreach (explode(',', $dokumen->id_kelengkapan) as $h)
                                            <dd>✅ {{ $h }} <br> </dd>
                                        @endforeach
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

    </x-module.admin>
