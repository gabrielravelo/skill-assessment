<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class QuoteRandomComponent extends Component
{
    public $quotes; 

    public function mount()
    {
        $this->quotes = [];
        
        for ($i = 0; $i < 5; $i++) {
            $response = Http::get('https://dummyjson.com/quotes/random');
            $this->quotes[] = $response->json();
        }
    }

    public function render()
    {
        return view('livewire.quote-random-component');
    }
}
