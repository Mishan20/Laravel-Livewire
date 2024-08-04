<?php

namespace App\Http\Livewire\Products;

use session;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    public function render()
    {
        return view('livewire.products.create');
            
    }
    
    use WithFileUploads;

    public $name;
    public $price;
    public $status = true;
    public $image;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'status' => 'required|boolean',
        'image' => 'nullable|image|max:1024', // 1MB Max
    ];

    public function save()
    {
        dd('hello');
        $this->validate();

        $imagePath = $this->image ? $this->image->store('products', 'public') : null;

        $product = new Product();

        $product->name = $this->name;
        $product->price = $this->price;
        $product->status = $this->status;
        $product->image = $imagePath;
        $product->save();
        //session()->flash('message', 'Product successfully created.');
        return redirect()->to('/products');
    }

    
}
