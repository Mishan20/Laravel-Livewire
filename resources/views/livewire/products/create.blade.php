
<div>
        <div class="">
            <label for="name">Name</label>
            <input type="text" id="name" wire:model="name" class="">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="">
            <label for="price">Price</label>
            <input type="text" id="price" wire:model="price" class="">
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="">
            <label for="status">Status</label>
            <select id="status" wire:model="status" class="">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            @error('status') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="">
            <label for="image">Image</label>
            <input type="file" id="image" wire:model="image" class="">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="button" class="btn btn-primary" wire:click="save">Save</button>
</div>



