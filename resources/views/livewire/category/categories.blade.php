<div>
    @section('title', 'Category')
    <div class="section-header">
        <h1>Kategori</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Kategori</a></div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Kategori</h2>
        <p class="section-lead">Atur dan tambahkan kategori barang disini</p>
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              {{ session('success') }}
            </div>
          </div>
        @endif

        @if (session()->has('danger'))
          <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              {{ session('danger') }}
            </div>
          </div>
        @endif

        <div class="row">
            @if ($updateMode)
                @include('livewire.category.update')
            @else
                @include('livewire.category.create')
            @endif

            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                    <h4>Data Kategori</h4>
                    <div class="card-header-action">
                        <form>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                              <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table table-striped" id="sortable-table">
                            <thead>
                              <tr>
                                <th class="text-center">
                                  #
                                </th>
                                <th>Kategori</th>
                                <th>Kategori Induk</th>
                                <th>Created At</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="text-center">
                                        {{ $category->id }}
                                    </td>
                                    <td>
                                        {{ $category->name }}
                                    </td>
                                    <td>
                                        {{ $category->parent ? $category->parent->name: '-' }}
                                    </td>
                                    <td>{{ $category->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button wire:click="edit({{ $category->id }})" class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="delete({{ $category->id }})" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
