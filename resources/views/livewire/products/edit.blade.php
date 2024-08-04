<!-- resources/views/livewire/products/edit.blade.php -->


<div>
    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" wire:model="name" class="form-control">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" id="price" wire:model="price" class="form-control">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" wire:model="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            @error('status') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="newImage">Image</label>
            <input type="file" id="newImage" wire:model="newImage" class="form-control">
            @error('newImage') <span class="error">{{ $message }}</span> @enderror
            @if($image)
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $name }}" width="50">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
