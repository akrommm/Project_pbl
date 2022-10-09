<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tambah Data Module
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/master-data/module" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Module
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/module') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">APP</label>
                            @if ($errors->has('app'))
                            <label for="" class="label text-danger">{{ $errors->get('app')[0] }}</label>
                            @endif
                            <input type="text" name="app" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Name</label>
                            @if ($errors->has('name'))
                            <label for="" class="label text-danger">{{ $errors->get('name')[0] }}</label>
                            @endif
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Title</label>
                            @if ($errors->has('title'))
                            <label for="" class="label text-danger">{{ $errors->get('title')[0] }}</label>
                            @endif
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Sub Title</label>
                            @if ($errors->has('subtitle'))
                            <label for="" class="label text-danger">{{ $errors->get('subtitle')[0] }}</label>
                            @endif
                            <input type="text" name="subtitle" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">URL</label>
                            @if ($errors->has('url'))
                            <label for="" class="label text-danger">{{ $errors->get('url')[0] }}</label>
                            @endif
                            <input type="text" name="url" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Color</label>
                            @if ($errors->has('color'))
                            <label for="" class="label text-danger">{{ $errors->get('color')[0] }}</label>
                            @endif
                            <input type="text" name="color" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tag</label>
                            @if ($errors->has('tag'))
                            <label for="" class="label text-danger">{{ $errors->get('tag')[0] }}</label>
                            @endif
                            <input type="text" name="tag" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Menu</label>
                            @if ($errors->has('menu'))
                            <label for="" class="label text-danger">{{ $errors->get('menu')[0] }}</label>
                            @endif
                            <input type="text" name="menu" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>