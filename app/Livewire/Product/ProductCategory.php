<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Product Category')]
class ProductCategory extends Component
{
    public function render()
    {
        return view('livewire.product.product-category');
    }
}
