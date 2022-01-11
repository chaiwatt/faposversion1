<?php

namespace App\Http\Livewire\Product\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryCreateUpdate extends Component
{

    public $state = [];
    
    public $editAction = true;

    protected $listeners = ['editEvent' => 'actionType'];

    public function actionType($action){
        $this->editAction = $action;
    }

    public function createCategory(){
        $validateData = Validator::make($this->state, [
                'name' => 'required'
            ],
            [
                'name.required' => 'กรุณากรอก'
        ])->validate();

        Category::create($validateData);    

        $this->emitUp('$refresh');
        $this->emit('modalClose', [
            'modalId' => '#category-modal',
            'message' => 'เพิ่มหมวดหมู่สำเร็จ'
        ]);
    }

    public function edit(Category $category){
        dd('here');
        // $this->reset();

        // $this->showEditModal = true;

        // $this->category = $category;

        // $this->state = $category->toArray();

        // $this->dispatchBrowserEvent('show-category-modal');
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

    public function render()
    {
        return view('livewire.product.category.category-create-update');
    }
}
