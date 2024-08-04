<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Delete extends Component
{
    public function render()
    {
        return view('livewire.products.delete');
    }
    
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function delete()
    {
        $this->product->delete();

        //session()->flash('message', 'Product successfully deleted.');

        return redirect()->to('/products');
    }

   
}