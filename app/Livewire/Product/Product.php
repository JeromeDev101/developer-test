<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Product')]
class Product extends Component
{
    public function render()
    {
        return view('livewire.product.product');
    }
}
