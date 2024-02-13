<div>
    @foreach ($quotes as $quote)
        <livewire:quote-component :quote="$quote" />
    @endforeach
</div>
