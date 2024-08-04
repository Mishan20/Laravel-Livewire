<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.products.edit');
    }
    
    use WithFileUploads;

    public $product;
    public $name;
    public $price;
    public $status;
    public $image;
    public $newImage;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'status' => 'required|boolean',
        'newImage' => 'nullable|image|max:1024', // 1MB Max
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->status = $product->status;
        $this->image = $product->image;
    }

    public function update()
    {
        $this->validate();

        $imagePath = $this->image;

        if ($this->newImage) {
            $imagePath = $this->newImage->store('products', 'public');
        }

        $this->product->update([
            'name' => $this->name,
            'price' => $this->price,
            'status' => $this->status,
            'image' => $imagePath,
        ]);

        //session()->flash('message', 'Product successfully updated.');

        return redirect()->to('/products');
    }

    
}