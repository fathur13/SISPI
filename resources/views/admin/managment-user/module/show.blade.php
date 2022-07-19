<x-module.admin>
    <div class="container-fluid">
        <x-template.button.back-button url="admin/managment-user/module" />
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-secondary">Data Module</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <dl>
                            <dt>Nama</dt>
                            <dd>{{ $module->name }}</dd>
                            <dt>App</dt>
                            <dd>{{ $module->app }}</dd>
                            <dt>Tag</dt>
                            <dd>{{ $module->tag }}</dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <x-template.module-box color="{{ $module->color }}" title="{{ $module->title }}"
                            subtitle="{{ $module->subtitle }}" url="{{ $module->url }}" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pegawai </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('admin/managment-user/module/add-role') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_module" value="{{ $module->id }}">
                        <div class="form-groupe">
                            <label for="" class="control-label">
                                Pegawai
                            </label>
                            <select name="id_pegawai" id="" class="form-control">
                                @foreach ($list_pegawai as $pegawai)
                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-groupe">
                            <button class="btn float-right btn-info"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>NIP</th>
                            <th>Nama</th>
                        </thead>
                        <tbody>
                            @foreach ($module->role as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <a href="{{ url('admin/managment-user/module/delete-role', $role->id) }}"
                                            class="btn btn-danger"><i class="fas fa-trash"></i>Hapus Hak Akses</a>
                                    </td>
                                    <td>{{ $role->pegawai->nip }}</td>
                                    <td>{{ $role->pegawai->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
