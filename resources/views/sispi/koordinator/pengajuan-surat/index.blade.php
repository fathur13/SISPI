<x-module.sispi-koordinator>
    <div class="container-fluid">
        <h1 style="padding-left:10px">PENGAJUAN SURAT</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-secondary">
                <h2 class="m-0 font-weight-bold text-white" style="text-align: center">Pengajuan Surat Baru
            </div>
            <div class="card-body">
                {{-- <div class="card border-bottom-secondary shadow h-100 py-2"> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            @csrf
                            <thead class="bg-dark text-white">
                                <tr style="text-align:center">
                                    <th style="width: 1%">No</th>
                                    <th style="width:15%">AKSI</th>
                                    <th>
                                        NOMOR SURAT
                                    </th>
                                    <th style="width: 20%">PERIHAL</th>
                                    <th style="width: 10%">JENIS SURAT</th>
                                    <th>TANGGAL</th>
                                    <th>KET</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                                $nomor = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_suratkeluar as $suratkeluar)
                                    @if ($suratkeluar->status == 1)
                                        <tr style="text-align:center">
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-template.button.info-button
                                                        url="sispi/koordinator/pengajuan-surat"
                                                        id="{{ $suratkeluar->id }}" />
                                                    <form action="{{ url('ditolak', $suratkeluar->id) }}"
                                                        method="post"
                                                        onsubmit="return confirm('Yakin Ingin Di Tolak')">
                                                        @csrf
                                                        @method('put')
                                                        <button class="btn btn-danger"><span><i class="fa fa-trash"></i>
                                                                Tolak</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{ $suratkeluar->nomorsurat }}</td>
                                            <td style="text-align:left">{{ $suratkeluar->perihal }}</td>
                                            <td>{{ $suratkeluar->jenissurat->nama }}</td>
                                            <td>{{ $suratkeluar->tanggal }}</td>
                                            <td>{{ $suratkeluar->keterangan }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                {{-- </div> --}}
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-secondary text-white">
                <h2 class="m-0 font-weight-bold " style="text-align: center">Pengajuan Surat Ditolak
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th style="width: 1%">No</th>
                                <th style="width:15%">AKSI</th>
                                <th>
                                    NOMOR SURAT
                                </th>
                                <th style="width: 20%">PERIHAL</th>
                                <th style="width: 10%">JENIS SURAT</th>
                                <th>TANGGAL</th>
                                <th>KET</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_suratkeluar as $suratkeluar)
                                @if ($suratkeluar->status == 3)
                                    <tr style="text-align:center">
                                        <td>{{ $nomor++ }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('sispi/koordinator/pengajuan-surat/showditolak', $suratkeluar->id) }}"
                                                    class="btn btn-info"><i class="fa fa-eye" style="font-size: 13px">
                                                        Lihat</i></a>
                                                <x-template.button.edit-button url="sispi/koordinator/pengajuan-surat"
                                                    id="{{ $suratkeluar->id }}" />
                                                <a href="{{ url('sispi/koordinator/pengajuan-surat/delete-pengajuan', $suratkeluar->id) }} "
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{ $suratkeluar->nomorsurat }}</td>
                                        <td style="text-align:left">{{ $suratkeluar->perihal }}</td>
                                        <td>{{ $suratkeluar->jenissurat->nama }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->keterangan }}</td>
                                    </tr>
                                @endif
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
</x-module.sispi-koordinator>
