
<div>
    <h2>Are you sure you want to delete this product?</h2>
    <form wire:submit.prevent="delete">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="/products" class="btn btn-secondary">Cancel</a>
    </form>
</div>
