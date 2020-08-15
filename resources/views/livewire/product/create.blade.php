<div>
    @section('title', 'Add New Product')
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('admin.product') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create New Product</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Product</a></div>
          <div class="breadcrumb-item">New Product</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">New Product</h2>
        <p class="section-lead">silahkan isi form berikut untuk menambahkan product baru</p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Write Your Post</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                Nama Barang
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                Merek
                            </label>
                            <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric">
                                <option>Tech</option>
                                <option>News</option>
                                <option>Political</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                Kategori
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                      <span class="selectgroup-button">HTML</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                      <span class="selectgroup-button">CSS</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                      <span class="selectgroup-button">PHP</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                      <span class="selectgroup-button">JavaScript</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                      <span class="selectgroup-button">Ruby</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                      <span class="selectgroup-button">Ruby</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                      <span class="selectgroup-button">C++</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Sewa</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect05">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                            <div class="col-sm-12 col-md-7">
                            <textarea></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Barang</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Pilih Gambar</label>
                                    <input type="file" name="image" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                            <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric">
                                <option>Publish</option>
                                <option>Draft</option>
                                <option>Pending</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Create Post</button>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
