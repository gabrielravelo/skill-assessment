<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component 
{
    /**
     * Log the current user out of the application.
     */
     public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}

?>

<div class="flex flex-col justify-center items-center gap-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-red-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
    </svg>
    <h2 class="font-bold text-3xl">You have been blocked!</h2>
    <p class="text-center text-sm">Contact support if you think this is a mistake or wait until the admin unblocks you.</p>
    <button class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click="logout">
        Logout
    </button>
</div>
