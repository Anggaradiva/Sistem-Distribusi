<form>
    <div class="form-group mb-3">
        <label for="postName">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="postName" placeholder="" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="postDescription">Nilai Rata-Rata:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="postDescription" wire:model="description" placeholder=""></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
    </div>
</form>