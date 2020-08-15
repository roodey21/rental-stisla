<div class="col-12 col-md-4 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Merek Baru</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="name">Merek</label>
                    <input type="text" wire:model="name" name="name" class="form-control">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group text-right">
                    <button wire:click.prevent="store()" class="btn btn-primary">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>