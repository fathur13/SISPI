<x-module.sispi-admin>
    <div class="container-fluid">
        <h1 style="padding-left:10px">PENGAJUAN SURAT</h1><br>
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">
                <h2 class="m-0 font-weight-bold text-white" style="text-align: center">Pengajuan Surat Baru
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    {{-- <form action="{{ route('pengajuanfilter') }}" method="GET" class="form-group">
                        {{ csrf_field() }}
                            <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
                                <option value="0" selected> Pilih Tahun</option>
                                    <?php
                                    $year = date('Y');
                                    $min = $year - 60;
                                    $max = $year;
                                    for ($i = $max; $i >= $min; $i--) {
                                        echo '<option value=' . $i . '>' . $i . '</option>';
                                    } ?>
                            </select>
                            <select style="cursor:pointer;margin-top:1.5em;margin-bottom:1.5em;" class="form-control" id="tag_select" name="month">
                                <option value="0" selected> Pilih Bulan</option>
                                    <?php for( $m=1; $m<=12; ++$m ) { 
                                    $month_label = date('F', mktime(0, 0, 0, $m, 1));
                                    ?>
                                <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
                                <?php } ?>
                            </select>
                                                
                            <input class="btn btn-default btn-block" name="submit" type="submit" value="Cari Data Arsip"/>
                        </form> --}}
                    @php
                        $no = 1;
                        $nomor = 1;
                    @endphp


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th style="width:1%">No</th>
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
                                @if ($suratkeluar->status == 1)
                                    <tr style="text-align:center">
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="sispi/admin/pengajuan-surat"
                                                    id="{{ $suratkeluar->id }}" />
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
        <div class="card shadow mb-4">
            
            <div class="card-header py-3 bg-secondary">
                <h2 class="m-0 font-weight-bold text-white" style="text-align: center">Pengajuan Surat Ditolak
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th style="width:1%">No</th>
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
                                                <x-template.button.info-button url="sispi/admin/pengajuan-surat"
                                                    id="{{ $suratkeluar->id }}" />
                                                <x-template.button.edit-button url="sispi/admin/pengajuan-surat"
                                                    id="{{ $suratkeluar->id }}" />
                                                <a href="{{ url('sispi/admin/pengajuan-surat/delete-pengajuan', $suratkeluar->id) }}"
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
    </x-module.sispi-koordinator>
