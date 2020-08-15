<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Brand;
use App\Category;
use App\Product;

class Create extends Component
{
    public $product_name, $brand_id, $category_id, $description, $image, $status;
    public $brand, $brands, $category, $categories;
    public $time, $price;

    public function render()
    {
        $brands = Brand::orderBy('name', 'ASC')->get();
        $categories = Category::with(['child'])->orderBy('name', 'ASC')->get();
        $this->brands = $brands;
        $this->categories = $categories;

        return view('livewire.product.create');
    }
    
    public function store()
    {
        $this->validate([
            'product_name' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required',
            'time' => 'required',
            'price' => 'required',
        ]);

        Product::create([
            'name' => $this->product_name,
            'brand_id' => $this->brand_id,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'stok' => 1,
            'image' => $this->image,
            'status' => $this->status,
        ]);
    }
}
