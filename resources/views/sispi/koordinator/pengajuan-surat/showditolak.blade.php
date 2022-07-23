<x-module.sispi-koordinator>
    <div class="container-xl">
        <x-template.button.back-button url="sispi/koordinator/pengajuan-surat" />
        <div class="card shadow mb-4">
            <div class="card-header  py-3 bg-secondary text-white">

                <h2 class="m-0 font-weight-bold">
                    Detail Surat
                </h2>
            </div>
            <div class="card card-default">
                <hr class="no-margin">
                <div class="card-body">
                    <dl>
                        <dt>Perihal</dt>
                        <dd>{{ $suratkeluar->perihal }}</dd>
                        <h6><u>Detail</u></h6>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Nomor Surat</dt>
                                <dd>{{ $suratkeluar->nomorsurat }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Jenis Surat</dt>
                                <dd>{{ $suratkeluar->jenissurat->nama }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tanggal Surat</dt>
                                <dd>{{ $suratkeluar->tanggal_string }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tujuan Surat</dt>
                                <dd>{{ $suratkeluar->tujuan }}</dd>
                            </div>
                        </div>
                        <hr>
                        <div class="row ">
                            <table class="table table-bordered " style="text-align: center">
                                <thead class="bg-dark text-white ">
                                    <tr>
                                        <th>File Surat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <a class="btn btn-square btn-sm btn-outline-dark btn-rounded" terget="_blank"
                                            href="{{ url('public',$suratkeluar->file) }}">Download File</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.sispi-koordinator>
