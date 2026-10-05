<div class="text-center mt-5">

    <h1 class="h2 mb-4 fw-bold">Counter Livewire</h1>

    <div class="display-4 mb-4">
        {{ $count }}
    </div>

    <button wire:click="increment"
        class="btn btn-success me-2">
        +
    </button>

    <button wire:click="decrement"
        class="btn btn-danger me-2">
        -
    </button>

    <button wire:click="incrementByNumber({{ $number }})"
        class="btn btn-primary">
        +5
    </button>

</div>
