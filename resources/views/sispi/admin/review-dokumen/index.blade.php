<x-module.sispi-admin>
    <div class="container-fluid">
        <h1 style="padding-left:10px">REVIEW DOKUMEN</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">
                <h4 class="h2 m-0 font-weight-bold text-white">Data Dokumen
                </h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('sispi/admin/review-dokumen/filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Awal</label>
                                    <input type="date" class="form-control" name="tanggal_awal"
                                        value="{{ $tanggal_awal ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Akhir</label>
                                    <input type="date" class="form-control" name="tanggal_akhir"
                                        value="{{ $tanggal_akhir ?? '' }}">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                        <label for="" class="control-label">tanggal</label>
                        <input type="text" class="form-control" name="tanggal" value="{{ $tahun ?? "" }}">
                    </div> --}}
                        <div class="form-group">
                            <button class="btn btn-info float-right"><i class="fa fa-search"></i> Filter</button>
                            {{-- <form action="{{ url('sispi/admin/review-dokumen') }}"method="POST">
                                @csrf --}}
                                <a class="btn btn-dark float-right"  href="{{ url('sispi/admin/review-dokumen') }}" type="button">Kembali</a>
                            {{-- </form> --}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                {{-- <form action="{{ url('sispi/admin/review-dokumen') }}" method="GET">
                    <input type="text" name="keyword" value="{{ $keyword }}">
                    <button type="submit">Cari</button>
                </form> --}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th style="width: 1%">NO</th>
                                <th style="width: 30%">KELENGKAPAN</th>
                                <th class="">
                                    NOMOR SPM
                                </th>
                                <th class="">TANGGAL</th>
                                <th class="" style="text-align:left">URAIAN</th>
                                <th style="width: 7%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_dokumen as $dokumen)
                                <tr style="text-align:center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-left">
                                        @foreach (explode(',', $dokumen->id_kelengkapan) as $h)
                                            <dd>✅ {{ $h }} <br> </dd>
                                        @endforeach
                                    </td>
                                    </td>
                                    <td>
                                        {{ $dokumen->nomor_spm }}
                                    </td>
                                    <td>{{ $dokumen->tanggal_string }}</td>
                                    <td style="text-align:left">{{ $dokumen->uraian }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="sispi/admin/review-dokumen"
                                                id="{{ $dokumen->id }}" />
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
