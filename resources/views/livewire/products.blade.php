<div>
    <form wire:submit.prevent="saveProduct">
        <div>
            <label>Name:</label>
            <input type="text" wire:model="name">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Price:</label>
            <input type="number" wire:model="price" step="0.01">
            @error('price') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Status:</label>
            <select wire:model="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            @error('status') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Image:</label>
            <input type="file" wire:model="image">
            @error('image') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Save Product</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" width="50">
                    @endif
                </td>
                <td>
                    <button wire:click="editProduct({{ $product->id }})">Edit</button>
                    <button wire:click="deleteProduct({{ $product->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>