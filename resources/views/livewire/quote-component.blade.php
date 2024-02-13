<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 text-gray-900 mb-12">
    <div class="text-right">
        <livewire:add-favorite-quote-component :author="$quote['author']" :quote="$quote['quote']" />
    </div>
    <div>
        <img src="{{ asset('img/quotes.png') }}" alt="Quotes" class="w-20 h-20">
        <p class="font-bold text-xl">{{ $quote['quote'] }}</p>
        <p class="italic">{{ $quote['author'] }}</p>
    </div>
</div>
