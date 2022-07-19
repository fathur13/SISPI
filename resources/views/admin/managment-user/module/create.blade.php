<x-module.admin>
    
    <div class="container-fluid">
        <x-template.button.back-button url="admin/managment-user/module"/>
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-secondary">Tambah Data Module</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/managment-user/module') }}" id="add_form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">App</label>
                                <input type="text" class="form-control" name="app">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Sub Title</label>
                                <input type="text" class="form-control" name="subtitle">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Url</label>
                                <input type="text" class="form-control" name="url">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Color</label>
                                <input type="text" class="form-control" name="color">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tag</label>
                                <input type="text" class="form-control" name="tag">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Menu</label>
                                <input type="text" class="form-control" name="menu">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>

</x-module.admin>