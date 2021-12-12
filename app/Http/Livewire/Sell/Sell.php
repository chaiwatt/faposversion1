<?php

namespace App\Http\Livewire\Sell;

use Livewire\Component;

class Sell extends Component
{
    protected $listeners = ['scanResult' => 'scannedProductBarcode'];

    public $productCode = null;

    public function scannedProductBarcode($code){
        $this->productCode = $code;
        // dd($this->productCode);
    }

    public function render()
    {
        return view('livewire.sell.sell');
    }
}
