<div>
    @section('title', 'Brand')
    <div class="section-header">
        <h1>Brand</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Brand</a></div>
          {{-- <div class="breadcrumb-item">Table</div> --}}
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Brand</h2>
        <p class="section-lead">Atur dan tambahkan merek barang disini</p>
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
                @include('livewire.brand.update')
            @else
                @include('livewire.brand.create')
            @endif

            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                    <h4>Data Merek</h4>
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
                                <th>Nama Merek</th>
                                <th>Created At</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                <tr>
                                    <td class="text-center">
                                        {{ $brand->id }}
                                    </td>
                                    <td>
                                        {{ $brand->name }}
                                    </td>
                                    <td>{{ $brand->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button wire:click="edit({{ $brand->id }})" class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="delete({{ $brand->id }})" class="btn btn-danger btn-sm">Delete</button>
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
