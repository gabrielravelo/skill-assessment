@php
    $class ? $color = "bg-green-600 hover:bg-green-700" : $color = "bg-red-600"
@endphp
<x-danger-button 
    wire:click="banUser"
    class="justify-center min-w-28 {{ $color }}">
    {{ $message }}
</x-danger-button>
