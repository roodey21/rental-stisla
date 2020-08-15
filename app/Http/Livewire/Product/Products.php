<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Products extends Component
{

    public function render()
    {
        return view('livewire.product.products');
    }

    public function create()
    {
        return redirect()->route('admin.product.create');
    }
}
