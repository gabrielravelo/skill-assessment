<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12 px-3 md:px-0">
        <div class="container mx-auto">
            <h3 class="text-lg font-bold">My Quotes</h3>
            <div class="flex justify-between items-end gap-2">
                <p>
                    Here you can manage all the users.
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            @if($users->count())
                @foreach ($users as $user)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 text-gray-900 mb-12">
                        <div class="flex flex-col md:flex-row gap-2 justify-between">
                            <div class="flex flex-col md:flex-row gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 self-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-xl">{{ $user->name }}</p>
                                    <p class="italic">{{ $user->email }}</p>
                                    <p class="italic font-bold">{{ $user->quotes->count() }} quotes added to favorites. 
                                        @if($user->quotes->count())
                                            <span class="italic font-bold text-sm">(Last quote added {{ $user->quotes->last()->created_at->diffForHumans() }})</span>
                                        @endif
                                    </p>
                                    <p class="text-sm">Account created {{ $user->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <livewire:ban-user-component :message="$user->banned ? 'Unban' : 'Ban'" :user="$user" />
                        </div>
                    </div>
                @endforeach
            
                {{ $users->links('pagination::tailwind') }}
            @else
                <div class="flex flex-col justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                    </svg>                  
                    <p>Oops! You don't have added any favorite quotes, go to <a href="{{ route('quotes') }}" class="underline hover:no-underline font-bold">Quotes</a> and add some!</p>
                </div>
            @endif
        </div>

        

    </div>
</x-app-layout>
