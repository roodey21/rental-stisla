<div class="col-12 col-md-4 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Merek</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <input type="text" wire:model="brand_id" class="form-control">
                    <label for="name">Merek</label>
                    <input type="text" wire:model="name" name="name" class="form-control">
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                </div>
                <div class="form-group text-right">
                    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
                    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>