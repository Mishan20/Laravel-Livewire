<div>
    <h1>Counter</h1>
    <x-primary-button wire:click="increment">Increment</x-primary-button>  
    <x-primary-button wire:click="decrement">Decrement</x-primary-button>
    <x-primary-button wire:click="resetCount">Reset</x-primary-button>
    <p>Count: {{ $count }}</p>
</div>
