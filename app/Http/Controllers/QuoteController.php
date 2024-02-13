<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function index()
    {
        return view('quotes.index');
    }

    public function randomQuotes($number)
    {
        $quotes = [];
        
        for ($i = 0; $i < $number; $i++) {
            $response = Http::get('https://dummyjson.com/quotes/random');
            $quotes[] = $response->json();
        }

        return response()->json($quotes);
    }

    public function favoriteQuotes()
    {
        $quotes = auth()->user()->quotes;

        return response()
            ->json($quotes);
    }

    public function deleteQuote($id)
    {
        $quote = Quote::find($id);

        if(!$quote) {
            return response()
                ->json(['message' => "The quote doesn't exist."], 404);
        }

        if($quote->user_id != auth()->user()->id) {
            return response()
                ->json(['message' => "This quote is not in your favorite quotes."], 404);
        }

        $quote->delete();

        return response()
            ->json(['message'=>'The quote has been deleted successfully!'], 200);
        
    }
}