<?php

namespace App\Models;

use App\Models\Lot;
use App\Models\Category;
use App\Models\ProductTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $appends = [
        'transaction',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function getTransactionAttribute(){
        $transactions = ProductTransaction::where('product_id',$this->id)->get();
        return $transactions;
    }
    public function getTotalAttribute(){
        return ProductTransaction::where('product_id',$this->id)->sum('quantity');
    }
}
