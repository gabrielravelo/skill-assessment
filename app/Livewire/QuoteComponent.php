<?php

namespace App\Livewire;

use Livewire\Component;

class QuoteComponent extends Component
{
    public $quote;

    public function render()
    {
        return view('livewire.quote-component');
    }
}
