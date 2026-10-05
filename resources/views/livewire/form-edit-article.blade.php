<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-6">

            <div class="card shadow-lg border-0 rounded-4 p-4">
                <h2 class="fw-bold text-center mb-4">Modifica l'articolo</h2>

                @if (session('message'))
                    <div class="alert alert-success text-center rounded-3">
                        {{ session('message') }}
                    </div>
                @endif

                <form wire:submit="updateArticle" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="form-label fw-semibold">Titolo</label>
                        <input wire:model="title" type="text" id="title"
                            class="form-control form-control-lg rounded-3 @error('title') is-invalid @enderror"
                            placeholder="Modifica il titolo dell'articolo">

                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="subtitle" class="form-label fw-semibold">Sottotitolo</label>
                        <input wire:model="subtitle" type="text" id="subtitle"
                            class="form-control form-control-lg rounded-3 @error('subtitle') is-invalid @enderror"
                            placeholder="Modifica il sottotitolo">

                        @error('subtitle')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="body" class="form-label fw-semibold">Contenuto</label>
                        <textarea id="body" wire:model="body" rows="5"
                            class="form-control rounded-3 @error('body') is-invalid @enderror"
                            placeholder="Aggiorna il contenuto dell'articolo"></textarea>

                        @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="btn btn-warning btn-lg w-100 rounded-3 fw-semibold shadow-sm text-dark">
                        Aggiorna Articolo
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>
