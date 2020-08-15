<div class="col-12 col-md-4 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Kategori Baru</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="name">Kategori</label>
                    <input type="text" wire:model="name" name="name" class="form-control">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label for="parent">Kategori</label>
                    <select wire:model="parent_id" class="form-control">
                        <option value="">None</option>
                        @foreach ($parents as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group text-right">
                    <button wire:click.prevent="store()" class="btn btn-primary">Tambah</button>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>