<x-module.sispi-admin>
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

        <h1 style="padding-left:10px">ARSIP SURAT</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">
                <h5 class="h2 m-0 font-weight-bold text-white">Arsip Surat Keluar
                    <a href="{{ url('sispi/admin/surat-keluar/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus ml-2"></i> Tambah Arsip</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white" >
                            <tr style="text-align:center">
                                <th class="col-md-1">NO</th>
                                <th style="width: 1%">STATUS</th>
                                <th class="col-md-4" style="text-align:left">PERIHAL</th>
                                <th class="col-md-3">
                                    NOMOR SURAT
                                </th>
                                <th class="col-md-2">TUJUAN</th>
                                <th style="width: 3%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_suratkeluar as $suratkeluar)
                                <tr style="text-align:center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($suratkeluar->status == 1)
                                            <label class="btn btn-warning">Diproses</label>
                                        @elseif ($suratkeluar->status == 2)
                                            <label class="btn btn-success">Diterima</label>
                                        @elseif ($suratkeluar->status == 3)
                                            <label class="btn btn-danger">Ditolak</label>
                                        @endif
                                    </td>
                                    <td style="text-align:left">{{ $suratkeluar->perihal }}</td>
                                    </td>
                                    <td>
                                        {{ $suratkeluar->nomorsurat }}
                                    </td>
                                    <td>{{ $suratkeluar->tujuan }}
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="sispi/admin/surat-keluar"
                                                id="{{ $suratkeluar->id }}" />
                                            <form action="{{ url('suratkeluar', $suratkeluar->id) }}" method="post">
                                                @csrf
                                                {{-- @method('delete')
                                                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i
                                                        class="fa fa-trash" style="font-size: 10px"> Hapus</i></button> --}}
                                            </form>
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
    </x-module.admin>
