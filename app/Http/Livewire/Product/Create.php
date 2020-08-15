<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Create extends Component
{
    public $product_name, $brand_id, $category_id, $description, $image;
    public $brand, $brands, $category, $categories;

    public function render()
    {
        return view('livewire.product.create');
    }
}
