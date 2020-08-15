<?php

namespace App\Http\Livewire\Brand;

use Livewire\Component;
use App\Brand;

class Brands extends Component
{
    public $brands, $brand_id, $name, $slug;
    public $updateMode = false;

    public function render()
    {
        $this->brands = Brand::all();

        return view('livewire.brand.brands');
    }

    public function resetInputFields()
    {
        $this->name = '';
    }
    
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Brand::create($validatedDate);

        session()->flash('success', 'Users Created Successfully.');
        
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $brand = Brand::where('id', $id)->first();
        $this->brand_id = $id;
        $this->name = $brand->name;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required'
        ]);

        if ($this->brand_id) {
            $brand = Brand::find($this->brand_id);
            $brand->update([
                'id' => $this->brand_id,
                'name' => $this->name,
            ]);
            $this->updateMode = false;
            session()->flash('success', 'Users Deleted Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id) {
            Brand::where('id', $id)->delete();
            session()->flash('success', 'Users Deleted Successfully.');
        }
    }
}
