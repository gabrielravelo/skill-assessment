<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Quotes
        </h2>
    </x-slot>

    <div class="py-12 px-3 md:px-0">
        <div class="container mx-auto">
            <h3 class="text-lg font-bold">Random Quotes</h3>
            <div class="flex flex-col md:flex-row justify-between items-end gap-3 md:gap-2">
                <p>
                    Here are 5 randoms quotes, click in the button to update the quotes, if you like a quote, click in the 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    to add the quote in your favorites.
                </p>
                <x-primary-button type="button" class="w-full md:w-auto justify-center" onclick="window.location.reload();">
                    Update Quotes
                </x-primary-button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <livewire:quote-random-component />
        </div>
    </div>
</x-app-layout>