<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Data Mahasiswa</div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/managment-user/mahasiswa') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIM</label>
                            <input type="text" name="nim" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="text" name="password" id="" class="form-control">
                        </div>
                    </div>
                    <div class="com-md-6">
                        <button class="btn btn-primary"><i class="fas fa-save">Simpan</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.sispi.admin>
