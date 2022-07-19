<x-module.sispi-keluhan-koordinator>
    <div class="container-fluid">
        <h1 style="padding-left:10px">KELUHAN</h1><br>
        <div class="card shadow mb-4 ">
            <div class="card-header py-3">
                <h5 class="h2 m-0 font-weight-bold text-center">Laporan Masuk
                </h5>
            </div>

            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#description" role="tab" aria-controls="description"
                            aria-selected="true" style="color:gray">semua</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#BarangMilikNegara" role="tab" aria-controls="history"
                            aria-selected="false">History</a>
                    </li> --}}
                    @foreach ($list_jenislaporan as $jenis)
                        {{-- @foreach (explode(' ', $jenis) as $h) --}}
                        @php
                            $text = str_replace(' ', '', $jenis->nama);
                        @endphp
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ $text }}" role="tab" aria-controls="history"
                                aria-selected="false" style="color: gray">{{ $jenis->nama }}</a>
                        </li>
                        {{-- @endforeach --}}
                    @endforeach
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#BarangMilikNegara" role="tab" aria-controls="history"
                            aria-selected="false">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#deals" role="tab" aria-controls="deals"
                            aria-selected="false">Deals</a>
                    </li> --}}
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="description" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                @csrf

                                <thead class="bg-dark text-white">
                                    <tr style="text-align:center">
                                        <th style="width: 1%">NO</th>
                                        <th style="width: 13%">AKSI</th>
                                        <th style="text-align:left">JUDUL</th>
                                        <th>
                                            JENIS LAPORAN
                                        </th>
                                        <th>TANGGAL</th>
                                        <th>STATUS</th>
                                        <th style="width: 1%">KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_keluhan as $keluhan)
                                            <tr style="text-align:center">
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- @if ($keluhan->status == 1) --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <x-template.button.info-button
                                                            url="sispi/keluhan-koordinator/keluhan"
                                                            id="{{ $keluhan->id }}" />
                                                    </div>
                                                </td>
                                                {{-- @endif --}}


                                                <td style="text-align:left">{{ $keluhan->judul }}</td>
                                                </td>
                                                <td>
                                                    {{ $keluhan->jenislaporan->nama }}
                                                </td>
                                                <td>{{ $keluhan->tanggal }}</td>
                                                <td>
                                                    @if ($keluhan->status == 1)
                                                        <label class="btn btn-warning">Diajukan</label>
                                                    @elseif ($keluhan->status == 2)
                                                        <label class="btn btn-success">Diproses</label>
                                                    @endif
                                                </td>
                                                <td>{{ $keluhan->keterangan }}</td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @foreach ($list_jenislaporan as $jenis)
                    @php
                            $text = str_replace(' ', '', $jenis->nama);
                        @endphp
                        <div class="tab-pane" id="{{ $text }}" role="tabpanel" aria-labelledby="history-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    @csrf

                                    <thead class="bg-dark text-white">
                                        <tr style="text-align:center">
                                            <th style="width: 1%">NO</th>
                                            <th style="width: 13%">AKSI</th>
                                            <th style="text-align:left">JUDUL</th>
                                            <th>
                                                JENIS LAPORAN
                                            </th>
                                            <th>TANGGAL</th>
                                            <th>STATUS</th>
                                            <th style="width: 1%">KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_keluhan as $keluhan)
                                            {{-- @foreach ($keluhan->jenislaporan->nama as $h) --}}
                                            @if ($keluhan->jenislaporan->nama == $jenis->nama)
                                                <tr style="text-align:center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    {{-- @if ($keluhan->status == 1) --}}
                                                    <td>
                                                        <div class="btn-group">
                                                            <x-template.button.info-button
                                                                url="sispi/keluhan-koordinator/keluhan"
                                                                id="{{ $keluhan->id }}" />
                                                        </div>
                                                    </td>
                                                    {{-- @endif --}}


                                                    <td style="text-align:left">{{ $keluhan->judul }}</td>
                                                    </td>
                                                    <td>
                                                        {{ $keluhan->jenislaporan->nama }}
                                                    </td>
                                                    <td>{{ $keluhan->tanggal }}</td>
                                                    <td>
                                                        @if ($keluhan->status == 1)
                                                            <label class="btn btn-warning">Diajukan</label>
                                                        @elseif ($keluhan->status == 2)
                                                            <label class="btn btn-success">Diproses</label>
                                                        @endif
                                                    </td>
                                                    <td>{{ $keluhan->keterangan }}</td>
                                                </tr>
                                            @endif
                                            {{-- @endforeach --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
                        <p class="card-text">Immerse yourself in the
                            colours, aromas and traditions of Emilia-Romagna
                            with a holiday in Bologna, and discover the
                            city's rich artistic heritage.</p>
                        <a href="#" class="btn btn-danger btn-sm">Get
                            Deals</a>
                    </div> --}}
                </div>

            </div>

        </div>

    </div>
    <script>
        $('#bologna-list a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })

        $(function() {
            $("#dataTable").DataTable({
                "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                    "sEmptyTable": "Tidak ada data di database"
                }
            });

        });
    </script>
</x-module.sispi-keluhan-koordinator>
