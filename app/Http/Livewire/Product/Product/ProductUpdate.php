<?php

namespace App\Http\Livewire\Product\Product;

use App\Models\Product;
use Livewire\Component;

class ProductUpdate extends Component
{

    public $state = [];

	public $product;

    public function mount(Product $product)
	{
		$this->state = $product->toArray();


		$this->product = $product;
	}

    public function render()
    {
        return view('livewire.product.product.product-update');
    }
}
