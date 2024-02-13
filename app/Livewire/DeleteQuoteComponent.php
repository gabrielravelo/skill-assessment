<?php

namespace App\Livewire;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class DeleteQuoteComponent extends Component
{
    use WireToast;

    
    public $quote;

    public function deleteQuote()
    {
        $this->quote->delete();

        toast()
            ->success('The quote has been deleted!', 'Deleted', 4000)
            ->pushOnNextPage();

        redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.delete-quote-component');
    }
}
