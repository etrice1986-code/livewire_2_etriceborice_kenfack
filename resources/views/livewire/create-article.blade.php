<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h2 class="mb-4 fw-bold text-center">Crea un nuovo articolo</h2>

            {{-- Message --}}
            @if (@session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            {{-- message end --}}

            <form wire:submit="store" action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input wire:model="title" type="text" id="title"
                        class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo</label>
                    <input wire:model="subtitle" type="text" id="subtitle"
                        class="form-control @error('subtitle') is-invalid @enderror">
                    @error('subtitle')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Contenuto</label>
                    <textarea id="body" wire:model="body"
                        class="form-control @error('body') is-invalid @enderror"></textarea>
                    @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Crea Articolo
                </button>

            </form>
        </div>
    </div>
</div>
