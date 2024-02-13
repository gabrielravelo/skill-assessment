<?php

namespace App\Livewire;

use App\Models\Quote;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class AddFavoriteQuoteComponent extends Component
{
    use WireToast;

    
    public $quote;
    public $author;
    public $isAdded;

    public function addFavorite()
    {
        $existQuote = Quote::where([
            ['quote', $this->quote], 
            ['author', $this->author], 
            ['user_id', auth()->user()->id]
        ])->first();

        if($existQuote) {
            $existQuote->delete();
            $this->isAdded = false;
            toast()
                ->info('The quote has been removed from favorites!', 'Removed', 3000)
                ->push();
        } else {
            Quote::create([
                'user_id'=> auth()->user()->id,
                'quote' => $this->quote,
                'author' => $this->author
            ]);
            $this->isAdded = true;
            
            toast()
                ->success('The quote has been added to favorites!', 'Added', 3000)
                ->push();
        }

    }

    public function render()
    {
        return view('livewire.add-favorite-quote-component');
    }
}
