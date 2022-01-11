<?php

namespace App\Http\Livewire\Product\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryList extends Component
{
    public $state = [];

    public $category;

    public $showEditModal = true;
    
    protected $listeners = [
        '$refresh' => '$refresh',
        'deleteConfirmed' => 'deleteCategory'
    ];

    public $categoryIdBeingRemoved = null;

    public function addNew(){
    
        $this->reset();

        // $this->showEditModal = false;

        // $this->dispatchBrowserEvent('show-category-modal');

        $this->emit('show-category-modal', [
            'modalId' => '#category-modal',
            'showEditModal' => false
        ]);
    }


    // public function createCategory(){
    //     $validateData = Validator::make($this->state, [
    //             'name' => 'required'
    //         ],
    //         [
    //             'name.required' => 'กรุณากรอก'
    //     ])->validate();
        
    //     Category::create($validateData);    

    //     $this->dispatchBrowserEvent('hide-category-modal',[
    //         'message' => 'เพิ่มหมวดหมู่สำเร็จ'
    //     ]);
    // }

    public function edit(Category $category){
        $this->reset();

        // $this->showEditModal = true;

        $this->category = $category;

        $this->state = $category->toArray();
        dd($this->state);

        // $this->dispatchBrowserEvent('show-category-modal');
        $this->emit('show-category-modal', [
            'modalId' => '#category-modal',
            'showEditModal' => true
        ]);
    }

    // public function updateCategory(){
    //     $validateData = Validator::make($this->state, [
    //             'name' => 'required'
    //         ],
    //         [
    //             'name.required' => 'กรุณากรอก'
    //     ])->validate();

    //     $this->category->update($validateData);

    //     $this->dispatchBrowserEvent('hide-category-modal',[
    //         'message' => 'แก้ไขหมวดหมู่สำเร็จ'
    //     ]);
    // }

    public function delete($id){
        $this->categoryIdBeingRemoved = $id;
        $this->emit('show-delete-confirmation', [
            'title' => 'ลบหมวด',
            'text' => 'คิงจะลบแต้กะ',
        ]);
    }


    public function deleteCategory(){
        $category = Category::findOrFail($this->categoryIdBeingRemoved);
        if($category->products->count() === 0){
            $category->delete();
            $this->dispatchBrowserEvent('hide-category-modal',[
                'message' => 'ลบหมวดหมู่สำเร็จ'
            ]);
        }else{
            $this->dispatchBrowserEvent('show-alert-error',[
                'title' => 'ผิดพลาด',
                'text' => 'ไม่สามารถลบหมวดหมู่หรือไม่',
            ]);
        }
        

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.product.category.category-list', [
            'categories' => $categories
        ]);
    }
}
