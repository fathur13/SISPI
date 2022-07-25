<x-module.sispi-admin>
    <div class="container-xl">
        <x-template.button.back-button url="sispi/admin/surat-keluar" />
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">

                <h2 class="m-0 font-weight-bold text-white">
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
                                <dd>{{ $suratkeluar->Jenissurat->nama }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tanggal Surat</dt>
                                <dd>{{ $suratkeluar->tanggal }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Asal Surat</dt>
                                <dd>{{ $suratkeluar->tujuan }}</dd>
                            </div>
                        </div>
                        <hr>
                        <div class="row ">
                            <table class="table table-bordered " style="text-align: center">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th>File Lampiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <a class="btn btn-square btn-sm btn-outline-dark btn-rounded" terget="popup"
                                            onclick="window.open('{{ url('public') . $suratkeluar->file }}','popup','width=800,height=600'); return false;">Download
                                            Surat</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.sispi-admin>
