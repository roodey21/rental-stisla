<div class="col-12 col-md-4 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Kategori</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <input type="hidden" wire:model="category_id" class="form-control">
                    <label for="name">Kategori</label>
                    <input type="text" wire:model="name" class="form-control">
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                </div>
                <div class="form-group">
                    <label for="parent">Kategori</label>
                    <select wire:model="parent_id" class="form-control">
                        <option value="">None</option>
                        @foreach ($parents as $parent)
                            <option value="{{ $parent->id }}" {{ $category->parent_id == $parent->id ? 'selected': '' }}>{{ $parent->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group text-right">
                    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
                    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>