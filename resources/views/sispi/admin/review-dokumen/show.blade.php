<x-module.sispi-admin>
    <div class="container-xl">
        <x-template.button.back-button url="sispi/admin/review-dokumen" />
        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">

                <h2 class="m-0 font-weight-bold text-white">
                    Detail Dokumen
                </h2>
            </div>
            <div class="card card-default">
                <hr class="no-margin">
                <div class="card-body">
                    <dl>
                        <dt>Perihal</dt>
                        <dd>{{ $review_dokuman->uraian }}</dd>
                        <h6><u>Detail</u></h6>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Nomor SPM</dt>
                                <dd>{{ $review_dokuman->nomor_spm }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Jenis Dokumen</dt>
                                <dd>{{ $review_dokuman->jenisdokumen->nama }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Besaran SPM</dt>
                                <dd>{{ $review_dokuman->besaran_spm }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tanggal</dt>
                                <dd>{{ $review_dokuman->tanggal }}</dd>
                            </div>
                        </div>
                        <h6><u>Kelengkapan</u></h6>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Keterangan</dt>
                                @foreach (explode(',', $review_dokuman->id_kelengkapan) as $h)
                                    <dd>✅ {{ $h }} <br> </dd>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row ">
                            <table class="table table-bordered " style="text-align: center">
                                <thead class="bg-secondary text-white ">
                                    <tr>
                                        <th>File Lampiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <a class="btn btn-square btn-sm btn-outline-dark btn-rounded" terget="popup"
                                            onclick="window.open('{{ url('public'). $review_dokuman->file }}','popup','width=800,height=600'); return false;">Download
                                            Lampiran</a>
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
