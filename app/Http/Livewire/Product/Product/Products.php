<?php

namespace App\Http\Livewire\Product\Product;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product.product.products',[
            'products' => $products
        ]);
    }
}
