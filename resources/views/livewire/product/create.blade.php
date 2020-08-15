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
                                <input type="text" wire:model="product_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                Merek
                            </label>
                            <div class="col-sm-12 col-md-7">
                            <select wire:model="brand_id" class="form-control selectric">
                                @forelse ($brands as $brand)    
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @empty
                                    <option value="">Belum ada Merek... Silahkan tambahkan merek terlebih dahulu</option>
                                @endforelse
                            </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                Kategori
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <div class="selectgroup selectgroup-pills">
                                    @forelse ($categories as $category)
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="{{ $category->id }}" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">{{ $category->name }}</span>
                                        </label>
                                    @empty
                                        Kategori belum tersedia silahkan tabahkan beberapa kategori terlebih dahulu
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Sewa</label>
                            <div class="col-sm-12 col-md-7">
                                <div class="input-group">
                                    <select wire.model="time" class="custom-select" id="inputGroupSelect05">
                                        <option selected>Pilih Waktu</option>
                                        <option value="1">12 Jam</option>
                                        <option value="2">1 Hari</option>
                                        <option value="3">2 Hari</option>
                                    </select>
                                    <input type="text" wire:model="price" class="form-control">
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
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
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
