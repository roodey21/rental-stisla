<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Category;

class Categories extends Component
{
    public $categories, $category, $category_id, $name;
    public $parents, $parent_id;
    public $updateMode = false;

    public function render()
    {
        $this->categories = Category::with(['parent'])->get();
        $this->parents = Category::getParent()->orderBy('name', 'ASC')->get();
        return view('livewire.category.categories');
    }
    
    public function resetInputFields()
    {
        $this->name = '';
        $this->parent_id = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
        ]);
        
        Category::create([
            'name' => $this->name,
            'parent_id' => $this->parent_id,
        ]);
        
        session()->flash('success', 'Category Created successfully.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $category = Category::with(['parent'])->where('id', $id)->first();
        $this->category = $category;
        // $parents = Category::getParent()->orderBy('name', 'ASC')->get();
        $this->category_id = $id;
        $this->name = $category->name;
        // $this->parent_id = $id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:50'
        ]);

        if ($this->category_id) {
            $category = Category::find($this->category_id);
            $category->update([
                'id' => $this->category_id,
                'name' => $this->name,
                'parent_id' => $this->parent_id,
            ]);
            $this->updateMode = false;
            session()->flash('success', 'Category Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Category::where('id', $id)->delete();
            session()->flash('success', 'Category Deleted Successfully.');
        }
    }

}
